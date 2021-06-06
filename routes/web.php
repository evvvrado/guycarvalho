<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name("site.index");
Route::get('/quem-somos', [\App\Http\Controllers\SiteController::class, 'quem_somos'])->name("site.quem_somos");
Route::get('/cursos', [\App\Http\Controllers\SiteController::class, 'cursos'])->name("site.cursos");
Route::get('/contato', [\App\Http\Controllers\SiteController::class, 'contato'])->name("site.contato");
Route::post('/contato/salvar', [\App\Http\Controllers\MensagemController::class, 'salvar'])->name("site.contato.salvar");
Route::get('/cadastro', [\App\Http\Controllers\SiteController::class, 'cadastro'])->name("site.cadastro");
Route::get('/login', [\App\Http\Controllers\SiteController::class, 'login'])->name("site.login");
Route::get('/associe-se', [\App\Http\Controllers\SiteController::class, 'associese'])->name("site.associe-se");
Route::get('/diretoria', [\App\Http\Controllers\SiteController::class, 'diretoria'])->name("site.diretoria");
Route::get('/estaduais', [\App\Http\Controllers\SiteController::class, 'estaduais'])->name("site.estaduais");
Route::get('/estaduais/{slug}', [\App\Http\Controllers\SiteController::class, 'estaduais_filtro'])->name("site.estaduais.filtro");
Route::get('/estadual/{slug}', [\App\Http\Controllers\SiteController::class, 'estadual'])->name("site.estadual");
Route::get('/sommelier', [\App\Http\Controllers\SiteController::class, 'sommelier'])->name("site.sommelier");
Route::get('/noticias/{slug?}', [\App\Http\Controllers\SiteController::class, 'noticias'])->name("site.noticias");
Route::get('/noticia/{categoria}/{noticia}', [\App\Http\Controllers\SiteController::class, 'noticia'])->name("site.noticia");
Route::get('/recuperar-senha', [\App\Http\Controllers\SiteController::class, 'recuperar_senha'])->name("site.recuperar-senha");

Route::get('/sistema/login', [\App\Http\Controllers\PainelController::class, 'login'])->name("painel.login");
Route::post('/sistema/logar', [\App\Http\Controllers\PainelController::class, 'logar'])->name("painel.logar");

Route::middleware(['admin'])->group(function () {
    
    Route::get('/sistema', [\App\Http\Controllers\PainelController::class, 'index'])->name("painel.index");
    Route::get('/sistema/sair', [\App\Http\Controllers\PainelController::class, 'sair'])->name("painel.sair");
    Route::get('/sistema/leads', [\App\Http\Controllers\PainelController::class, 'leads'])->name("painel.leads");

    // ROTAS DE USUÁRIOS
    Route::get('/sistema/usuarios', [\App\Http\Controllers\UsuariosController::class, 'consultar'])->name("painel.usuarios");
    Route::get('/sistema/usuarios/inativos', [\App\Http\Controllers\UsuariosController::class, 'consultar_inativos'])->name("painel.usuarios.inativos");
    Route::get('/sistema/usuarios/ativos', [\App\Http\Controllers\UsuariosController::class, 'consultar_ativos'])->name("painel.usuarios.ativos");
    Route::get('/sistema/usuarios/cadastro', [\App\Http\Controllers\UsuariosController::class, 'cadastro'])->name("painel.usuario.cadastro");
    Route::post('/sistema/usuarios/cadastrar', [\App\Http\Controllers\UsuariosController::class, 'cadastrar'])->name("painel.usuario.cadastrar");
    Route::get('/sistema/usuarios/editar/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'editar'])->name("painel.usuario.editar");
    Route::post('/sistema/usuarios/salvar/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'salvar'])->name("painel.usuario.salvar");
    Route::get('/sistema/usuarios/bloqueio/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'bloqueio'])->name("painel.usuario.bloqueio");

    //ROTAS DE ESTADUAIS
    Route::get('/sistema/estaduais', [\App\Http\Controllers\EstaduaisController::class, 'consultar'])->name("painel.estaduais");
    Route::get('/sistema/estaduais/cadastro', [\App\Http\Controllers\EstaduaisController::class, 'cadastro'])->name("painel.estadual.cadastro");
    Route::post('/sistema/estaduais/cadastrar', [\App\Http\Controllers\EstaduaisController::class, 'cadastrar'])->name("painel.estadual.cadastrar");
    Route::get('/sistema/estaduais/editar/{estadual}', [\App\Http\Controllers\EstaduaisController::class, 'editar'])->name("painel.estadual.editar");
    Route::post('/sistema/estaduais/salvar/{estadual}', [\App\Http\Controllers\EstaduaisController::class, 'salvar'])->name("painel.estadual.salvar");
    Route::get('/sistema/estaduais/deletar/{estadual}', [\App\Http\Controllers\EstaduaisController::class, 'deletar'])->name("painel.estadual.deletar");

    // ROTAS DE DIRETORIAS
    Route::get('/sistema/{estadual}/diretorias', [\App\Http\Controllers\DiretoriasController::class, 'consultar'])->name("painel.diretorias");
    Route::post('/sistema/diretorias/cadastrar', [\App\Http\Controllers\DiretoriasController::class, 'cadastrar'])->name("painel.diretoria.cadastrar");
    Route::post('/sistema/diretorias/salvar/{diretoria}', [\App\Http\Controllers\DiretoriasController::class, 'salvar'])->name("painel.diretoria.salvar");
    Route::get('/sistema/diretorias/deletar/{diretoria}', [\App\Http\Controllers\DiretoriasController::class, 'deletar'])->name("painel.diretoria.deletar");

    // ROTAS DE TAGS
    Route::get('/sistema/tags', [\App\Http\Controllers\TagsController::class, 'consultar'])->name("painel.tags");
    Route::post('/sistema/tags/cadastrar', [\App\Http\Controllers\TagsController::class, 'cadastrar'])->name("painel.tag.cadastrar");
    Route::post('/sistema/tags/salvar/{tag}', [\App\Http\Controllers\TagsController::class, 'salvar'])->name("painel.tag.salvar");
    Route::get('/sistema/tags/deletar/{tag}', [\App\Http\Controllers\TagsController::class, 'deletar'])->name("painel.tag.deletar");

    // ROTAS DE HASHTAGS
    Route::get('/sistema/hashtags', [\App\Http\Controllers\HashtagsController::class, 'consultar'])->name("painel.hashtags");
    Route::post('/sistema/hashtags/cadastrar', [\App\Http\Controllers\HashtagsController::class, 'cadastrar'])->name("painel.hashtag.cadastrar");
    Route::post('/sistema/hashtags/salvar/{hashtag}', [\App\Http\Controllers\HashtagsController::class, 'salvar'])->name("painel.hashtag.salvar");
    Route::get('/sistema/hashtags/deletar/{hashtag}', [\App\Http\Controllers\HashtagsController::class, 'deletar'])->name("painel.hashtag.deletar");

    // ROTAS DE CATEGORIAS
    Route::get('/sistema/categorias', [\App\Http\Controllers\CategoriasController::class, 'consultar'])->name("painel.categorias");
    Route::post('/sistema/categorias/cadastrar', [\App\Http\Controllers\CategoriasController::class, 'cadastrar'])->name("painel.categoria.cadastrar");
    Route::post('/sistema/categorias/salvar/{categoria}', [\App\Http\Controllers\CategoriasController::class, 'salvar'])->name("painel.categoria.salvar");
    Route::get('/sistema/categorias/deletar/{categoria}', [\App\Http\Controllers\CategoriasController::class, 'deletar'])->name("painel.categoria.deletar");

    // ROTAS DE NOTÍCIAS
    Route::get('/sistema/noticias', [\App\Http\Controllers\NoticiasController::class, 'consultar'])->name("painel.noticias");
    Route::get('/sistema/noticias/cadastro', [\App\Http\Controllers\NoticiasController::class, 'cadastro'])->name("painel.noticia.cadastro");
    Route::get('/sistema/noticias/leads/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'visitas'])->name("painel.noticia.visitas");
    Route::post('/sistema/noticias/cadastrar', [\App\Http\Controllers\NoticiasController::class, 'cadastrar'])->name("painel.noticia.cadastrar");
    Route::get('/sistema/noticias/editar/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'editar'])->name("painel.noticia.editar");
    Route::post('/sistema/noticias/salvar/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'salvar'])->name("painel.noticia.salvar");
    Route::get('/sistema/noticias/deletar/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'deletar'])->name("painel.noticia.deletar");
    Route::get('/sistema/noticias/publicar/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'publicar'])->name("painel.noticia.publicar");
    Route::get('/sistema/noticias/preview/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'preview'])->name("painel.noticia.preview");

    // ROTAS DE MENSAGENS
    Route::get('/sistema/mensagens', [\App\Http\Controllers\MensagemController::class, 'consultar'])->name("painel.mensagens");
    Route::get('/sistema/mensagens/exportar', [\App\Http\Controllers\MensagemController::class, 'exportar'])->name("painel.mensagens.exportar");

    //ROTAS DE CONFIGURAÇÕES
    Route::get('/sistema/configuracoes/contato', [\App\Http\Controllers\ConfiguracoesController::class, 'contato'])->name("painel.configuracoes.contato");
    Route::post('/sistema/configuracoes/contato/salvar', [\App\Http\Controllers\ConfiguracoesController::class, 'contato_salvar'])->name("painel.configuracoes.contato.salvar");
    Route::get('/sistema/configuracoes/seo', [\App\Http\Controllers\ConfiguracoesController::class, 'seo'])->name("painel.configuracoes.seo");
    Route::post('/sistema/configuracoes/seo/salvar/{pagina}', [\App\Http\Controllers\ConfiguracoesController::class, 'seo_salvar'])->name("painel.configuracoes.seo.salvar");

    Route::get('/sistema/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
});
