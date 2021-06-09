@include('site.includes.head')
<body class="brasil" style="overflow:hidden;">
    @include('site.includes.bodyHeader', [
            "classe" => "brasil info-header",
            "adicional" => '<div class="direita" style="bottom: 0!important;margin-right: -76px!important;">
                <h1>Sommelier</h1>
                <a href="' . route('site.quem_somos') . '">Quem somos</a>
            </div>'    
        ])
    <main class="main">
        @include('site.includes.menuBrasil')
        <section id="sommelier">
            <h1>Sommelier, conheça a profissão <span>O Sommelier é o profissional responsável pelas bebidas (principalmente, mas não unicamente, vinho) no estabelecimento, que pode ser um restaurante, bar ou um comércio - loja ou importadora de bebidas.</span></h1>
            <div class="fino">
                <p>
                    Quando da popularização dos restaurantes em Paris, no final do séc. XVIII, convencionou-se que quem trazia ou transportava o vinho ficava com a obrigação de prová-lo, não só pelo motivo exposto acima, mas também para garantir se o produto era de boa qualidade.
                    Assim, paulatinamente, nasceu a profissão como é conhecida hoje; o Sommelier é responsável pela escolha, compra, recebimento, guarda e pela prova do vinho antes que seja servido ao cliente.
                    Recentemente a profissão foi regulamentada no Brasil, através da Lei 12.467, de 26 de agosto de 2011, reconhecendo a importância desse profissional no setor de alimentos e bebidas.
                </p>
<!--					<h3>Como é o dia a dia da profissão?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis mattis massa quis pellentesque eu lobortis et scelerisque diam. Velit, adipiscing sodales facilisis in purus. Tincidunt lobortis quam aenean consectetur.</p>
                <h3>Como está o mercado de trabalho para o Sommelier?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget rhoncus proin duis a elementum ut eleifend. Aliquam cursus et fames sit odio. Mauris non gravida.</p>
                <h3>Qual a carga horária e a média salarial no Brasil?</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim at sed velit magna sed est tellus. Sed vel in quisque integer rhoncus sed est sit in. Varius mi magna nulla sed tellus. Integer pharetra, amet, at netus fringilla tempor augue rhoncus diam. Erat ut sit.
                    Varius mi magna nulla sed tellus. Integer pharetra, amet, at netus fringilla tempor augue rhoncus diam. Erat ut sit.
                </p>
                <h3>Qual a influência da regulamentação da profissão?</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscingfcom noss elit. In sed nibh sed cursus suscipit. In eu id et integer dui, sed vehicula leo facilisi. Egestas morbi in eget volutpat. Lacus velit ut id nullam adipiscing velit, diam ridiculus. Felis in mattis scelerisque nunc risus dignissim a neque.
                    Varius mi magna nulla sed tellus. Integer pharetra, amet, at netus fringilla tempor augue rhoncus diam. Erat ut sit.
                </p>
                <h3>O que é preciso para seguir a profissão? Existem muitos cursos disponíveis?</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam, proin duis dictum nulla sed vulputate in orci, tellus. Dignissim rhoncus egestas sed mattis dictum vulputate sit at fringilla. Ipsum tristique amet lorem nec morbi elementum in. At odio ac, ut vulputate cras.
                    Varius mi magna nulla sed tellus. Integer pharetra, amet, at netus fringilla tempor augue rhoncus diam. Erat ut sit.Varius mi magna nulla sed tellus. Integer pharetra, amet, at netus fringilla tempor augue rhoncus diam. Erat ut sit.
                </p>-->
                <h3>O que faz esse profissional ?</h3>
                <p>
                    Especialista que aconselha os clientes na escolha dos vinhos e outros itens (destilados, café, chocolate, pão, azeite,etc), em restaurantes e bares, com o 	objetivo de proporcionar aos mesmos não apenas o melhor padrão de serviços mas também a melhor experiência enogastronômica possível. Dependendo de sua responsabilidade e experiência, o Sommelier pode ser 	também responsável pela compra, gestão de estoques e gerenciamento da carta de vinhos e outros produtos dos estabelecimentos aos quais presta serviços.
                </p>
                <h3>Como é o dia a dia da profissão?</h3>
                <p>
                    A profissão de Sommelier hoje é multifacetada e não mais se limita ao trabalho em restaurantes. Cada vez mais, o conhecimento e “expertise” dos sommeliers tem-se tornado essenciais em importadoras, lojas de vinhos, supermercados e à serviço de produtores, brasileiros ou estrangeiros, auxiliando no marketing e divulgação de seus vinhos, levando informação  qualificada ao consumidor.
                </p>
                <h3>Como está o mercado de trabalho para o Sommelier?</h3>
                <p>
                    Por motivos óbvios, o mercado foi duramente afetado durante a pandemia, assim como todo o setor de serviços e particularmente os restaurantes e bares. Por outro lado, nesse período, constatou-se um aumento do consumo de vinhos nos domicílios e um crescimento da compra por meios digitais, ampliando consideravelmente o mercado. Espera-se que pelo menos uma parcela dessa expansão do Mercado de vinhos se torne permanente, ainda mais com o início do processo de vacinação em massa da população. Tudo isso são sinais positivos de que não faltarão boas oportunidades aos profissionais melhor qualificados, como os que são formados pelas ABS em todo o país.
                </p>
                <h3>Qual a carga horária e a média salarial no Brasil?</h3>
                <p>
                    O salário inicial de um Sommelier em um restaurante gira em torno de R$ 3.000, com média de 30 horas semanais de trabalho. Já em importadoras, lojas de vinho e produtores, o salário varia de acordo com o tamanho da empresa e o escopo das responsabilidades.
                </p>
                <h3>Qual a influência da regulamentação da profissão?</h3>
                <p>
                    A regulamentação da profissão foi passo fundamental no reconhecimento e valorização da atividade e de seus profissionais, que pouco a pouco, ganham 	reconhecimento semelhante ao já existente em países com maior  tradição 		na cultura do vinho, a exemplo dos países europeus.
                </p>
                <h3>O que é preciso para seguir a profissão? Existem muitos cursos disponíveis </h3>
                <p>
                    A principal qualidade que distingue os grandes Sommeliers é uma ATITUDE empática e humilde em relação aquele que deve ser sempre o foco de seu 	trabalho : o CLIENTE, que ressalte-se , tem sempre razão!
                    Todos os demais atributos como conhecimento (teórico e prático), educação e postura adequada podem (e devem) ser desenvolvidos e aperfeiçoados com o passar do tempo e com o aprimoramento constante de suas habilidades por meio de cursos, viagens técnicas e degustações, mas a base será sempre a Atitude.
                    O mercado oferece muitos cursos, a maioria deles de pequena duração e baixa carga horária de estudo. O diploma eventualmente recebido ao final de um desses cursos será de pouca valia num mercado cada vez mais exigente 	em relação à qualificação dos profissionais que nele atuam. Selecionar um bom curso de formação, reconhecido por sua tradição e reputação no mercado, é talvez o passo mais importante que um interessado em abraçar essa nobre profissão  deve tomar. O investimento num curso sério e exigente provavelmente será maior, mas a recompensa que virá ao final do mesmo, também.
                </p>

            </div>
            <div class="detalhe">
                <img src="{{asset('site/img/ico_chat.svg')}}" alt="Ícone chat" width="71" height="71">
                <p>A palavra Sommelier vem do francês. Em resumo, o carroceiro dos castelos e palácios, que, por transportar as pipas de vinho, acabou sendo incumbido de provar seu conteúdo antes que fosse servido aos Reis e nobres.</p>
            </div>
        </section>
    </main>
    @include('site.includes.footer')
</body>

</html>
