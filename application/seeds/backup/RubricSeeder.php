<?php
class RubricSeeder extends Seeder
{
    /**
     * Run on the command line:
     * php index.php database seed RubricSeeder
     */
    public function run()
    {
        $this->ci->load->model('Rubric_model');
        $data = array(
            [
                'title' => 'Aceptar a Cristo como su Señor y Salvador personal. (Rom. 10:8-11; Jn. 15:14)',
                'non_compliance' => '<strong>No hay evidencia o testimonio</strong> de que el estudiante ha aceptado a Cristo como su Señor y Salvador.',
                'partial_compliance' => 'N/A',
                'compliance' => '<strong>Hay</strong> evidencia <strong>o</strong> testimonio de que el estudiante ha aceptado a Cristo como su Señor y Salvador.',
                'exceeds_compliance' => 'Hay evidencia <strong>y</strong> testimonio de que el estudiante ha aceptado a Cristo como su Señor y Salvador.',
                'rubric_type' => 'Espiritual-1'
            ],
            [
                'title' => 'Desarrollar una personalidad controlada por Jesucristo, auto disciplinada, que da la honra a Dios (1 Corintios 3:16; Gálatas 5:22-23)',
                'non_compliance' => "El estudiante <strong>no evidencia</strong> una personalidad controlada por Jesucristo, auto-disciplinada, que da la honra a Dios.",
                'partial_compliance' => "El estudiante, <strong>en ocasiones</strong>, muestra gozo, paz, paciencia, bondad, benignidad (<em>gentileza</em>), mansedumbre, fe <strong>o</strong> templanza (<em>dominio propio</em>), pero <strong>no necesariamente por deseo de agradar a Dios</strong>.",
                'compliance' => "El estudiante evidencia el <strong>deseo</strong> de que su <strong>personalidad sea controlada por Jesucristo</strong> y se esfuerza por mostrar amor, gozo, paz, paciencia, bondad, benignidad (<em>gentileza</em>), mansedumbre, fe <strong>y</strong> templanza (<em>dominio propio</em>).",
                'exceeds_compliance' => "El estudiante <strong>evidencia una personalidad controlada por Jesucristo</strong>, auto-disciplinada, que da la honra a Dios, mostrando <strong>consistentemente</strong> amor, gozo, paz, paciencia, bondad, benignidad (<em>gentileza</em>), mansedumbre, fe <strong>y</strong> templanza (<em>dominio propio</em>).",
                'rubric_type' => 'Espiritual-1'
            ],
            [
                'title' => 'Reconocer la Biblia como la Palabra de Dios y como la única fuente de autoridad en cuanto a la fe y la vida, mostrando amor y respeto hacia ella (2 Tim. 3:15-17)',
                'non_compliance' => "El estudiante <strong>no reconoce</strong> la Biblia como palabra de Dios, ni fuente de autoridad en cuanto a la fe y la vida.",
                'partial_compliance' => "El estudiante <strong>dice</strong> que la Biblia es la Palabra de Dios, <strong>pero no</strong> da evidencia de que sea su <strong>fuente</strong> de <strong>autoridad</strong>.",
                'compliance' => "El estudiante <strong>define</strong> la Biblia como la Palabra de Dios y <strong>como la única fuente de autoridad en cuanto a la fe y la vida, mostrando amor y respeto hacia ella</strong>.",
                'exceeds_compliance' => "El estudiante <strong>explica y defiende</strong> con mansedumbre cómo la Biblia es la Palabra de Dios, fuente de autoridad en cuanto a la fe y la vida, mostrando y <strong>animando a otros a amarla y respetarla</strong>.",
                'rubric_type' => 'Espiritual-1'
            ],
            [
                'title' => 'Estar activamente involucrado en su iglesia local, sirviendo a Dios y a los demás. (Hebreos 10:23-25)',
                'non_compliance' => " <strong>No</strong> hay evidencia de que el estudiante <strong>asista</strong> a una iglesia o si asiste, <strong>no sirve</strong> en la misma.",
                'partial_compliance' => "Hay evidencia de que el estudiante <strong>asiste a una iglesia local y sirve de manera esporádica</strong>.",
                'compliance' => "Hay evidencia de que el estudiante <strong>está activamente involucrado(a) en su iglesia local</strong>, sirviendo a Dios y a los demás.",
                'exceeds_compliance' => "Hay evidencia de que el estudiante está activamente involucrado(a) en su iglesia local, sirviendo a Dios, a los demás y <strong>anima</strong> a otros a servir en sus iglesias. el estudiante es <strong>reconocido como un líder</strong> en su iglesia local, bajo la supervisión de sus pastores.",
                'rubric_type' => 'Espiritual-1'
            ],
            [
                'title' => 'Desarrollar un código moral interno de conducta basado en los principios bíblicos que le permitan vivir una vida diaria santa y agradable a Dios, conociendo y deseando hacer su voluntad. (Deut. 26:16-17; Rom 12:1-2)',
                'non_compliance' => "El estudiante <strong>no da evidencia</strong> de tener un código moral interno basado en principios bíblicos.",
                'partial_compliance' => "El estudiante da evidencia de tener un código moral interno que <strong>le lleva a una vida moral</strong>, no necesariamente porque tiene deseos de agradar a Dios.",
                'compliance' => "El estudiante da evidencia de una vida de santidad, manifestando expresamente su <strong>deseo de agradar a Dios</strong>, mostrado en una conducta basada en principios bíblicos.",
                'exceeds_compliance' => "El estudiante ha desarrollado y <strong>promueve</strong> un código moral interno de conducta basado en los principios bíblicos que le permitan vivir una vida diaria santa y agradable a Dios, conociendo y deseando hacer su voluntad.",
                'rubric_type' => 'Conductual-2'
            ],
            [
                'title' => 'Mostrar un carácter moral, excelencia académica y responsabilidad social por medio de una exposición continua a las verdades bíblicas, tanto por concepto como, por ejemplo; para que en su tiempo ejerza responsabilidad de poner en práctica lo que el Señor le proveyó en su estadía en esta institución (Prov. 20:11; Jos. 1:7)',
                'non_compliance' => "El estudiante <strong>no da evidencia de:</strong> un carácter moral, excelencia académica, <strong>ni</strong> de responsabilidad social bíblica.",
                'partial_compliance' => "El estudiante ejerce responsabilidad de poner en práctica <strong>parcialmente</strong> lo que el Señor le proveyó en su estadía en el colegio, conociendo y mostrando <strong>algunas</strong> de las siguientes:
    un carácter moral, excelencia académica <strong>y/o</strong> responsabilidad social bíblica.",
                'compliance' => "El estudiante ejerce responsabilidad de poner en práctica lo que el Señor le proveyó en su estadía en el colegio <strong>mostrando interés y crecimiento</strong> en estas áreas: un carácter moral, excelencia académica <strong>y</strong> responsabilidad social bíblica.",
                'exceeds_compliance' => "El estudiante ejerce responsabilidad de poner en práctica <strong>consistentemente</strong> lo que el Señor le proveyó en su estadía en el colegio, conociendo y mostrando: un carácter moral, excelencia académica <strong>y</strong> responsabilidad social bíblica.",
                'rubric_type' => 'Conductual-2'
            ],
            [
                'title' => 'Escoger actividades recreativas, deportivas y artísticas que sean saludables, que estimulen su espíritu y que lo alejen del pecado. (1 Corintios 10:23)',
                'non_compliance' => " <strong>No</strong> hay evidencia de que el estudiante escoja actividades recreativas, deportivas y artísticas que: sean saludables, que estimulen su espíritu y que lo alejen del pecado.",
                'partial_compliance' => "Hay evidencia de que el estudiante escoge actividades recreativas, deportivas y artísticas que:
    son saludables, <strong>pero</strong> que <strong>no</strong> estimulan su espíritu, <strong>ni</strong> lo alejan del pecado.",
                'compliance' => "Hay evidencia de que el estudiante <strong>escoge</strong> actividades recreativas, deportivas y artísticas que: son saludables, que estimulan su espíritu y que lo alejan del pecado.",
                'exceeds_compliance' => "Hay evidencia de que el estudiante escoge <strong>y motiva a otros a escoger</strong> actividades recreativas, deportivas y artísticas que:
    son saludables, que estimulan su espíritu y que los alejan del pecado.",
                'rubric_type' => 'Conductual-2'
            ],
            [
                'title' => 'Convertirse en buenos administradores de sus finanzas, su tiempo (incluyendo tiempo libre) y cualquier otro recurso a su disposición (Mt 25:14-30).',
                'non_compliance' => "El estudiante <strong>no da evidencia de ser un(a) buen(a) administrador(a)</strong> de:
                <ul><li> sus finanzas,
                <li> su tiempo (incluyendo tiempo libre)
                <li> <strong>ni de</strong> cualquier otro recurso a su disposición.</li></ul>",

                'partial_compliance' => "El estudiante da evidencia de ser un(a) buen(a) administrador(a) en <strong>algunas</strong> de las siguientes áreas: 
                <ul><li>sus finanzas,
                <li> su tiempo (incluyendo tiempo libre)
                <li> <strong>y/o</strong> cualquier otro recurso a su disposición.</li></ul>",
                'compliance' => "El estudiante da <strong>evidencia de ser un(a) buen(a) administrador(a)</strong> de:
                <ul><li> sus finanzas,
                <li> su tiempo (incluyendo tiempo libre)
                <li> <strong>y</strong> cualquier otro recurso a su disposición.</li></ul>",
                'exceeds_compliance' => "El estudiante da evidencia de ser un(a) buen(a) administrador(a) de los siguientes recursos, <strong>usándolos con amor sacrificial</strong>:
                    <ul><li>sus finanzas,
                <li> su tiempo (incluyendo tiempo libre)
                <li> y cualquier otro recurso a su disposición.</li></ul>",
                'rubric_type' => 'Conductual-3'
            ],
            [
                'title' => 'Entender el valor de cada ser humano en virtud de haber sido creados a la imagen y semejanza de Dios. (Génesis 1: 26-27; Salmos 139:13-16)',
                'non_compliance' => "El estudiante <strong>no explica ni relaciona</strong> el valor de cada ser humano en virtud de haber sido creado a la imagen y semejanza de Dios.",
                'partial_compliance' => "El estudiante <strong>puede enunciar que somos creados a la imagen y semejanza de Dios pero no logra relacionarlo con el valor</strong> de cada ser humano.",
                'compliance' => "El estudiante <strong>explica, relaciona y defiende</strong> el valor de cada ser humano en virtud de haber sido creado a la imagen y semejanza de Dios.",
                'exceeds_compliance' => "El estudiante <strong>prioriza y promueve apasionadamente</strong> el valor de cada ser humano en virtud de haber sido creado a la imagen y semejanza de Dios.",
                'rubric_type' => 'Social-5'
            ],
            [
                'title' => 'Desarrollar cortesía en todo lugar, tiempo y situación, tratando a cada persona con amor y respeto (Efesios 5:21)',
                'non_compliance' => "El estudiante <strong>no demuestra</strong> una actitud cortés en todo lugar, tiempo <strong>ni</strong> situación, <strong>ni</strong> trata a cada persona con amor o respeto.",
                'partial_compliance' => "El estudiante demuestra <strong>ocasionalmente</strong> una actitud cortés en <strong>ciertos</strong> lugares, tiempos y situaciones, tratando a <strong>algunas</strong> personas con amor y respeto.",
                'compliance' => "El estudiante <strong>demuestra</strong> una actitud cortés en <strong>todo</strong> lugar, tiempo y situación, tratando a <strong>cada</strong> persona con amor y respeto.",
                'exceeds_compliance' => "El estudiante demuestra una actitud cortés en todo lugar, tiempo y situación, tratando a cada persona con amor y respeto, <strong>animando a otros a hacer lo mismo y confrontando con mansedumbre a aquellos que no lo hacen</strong>.",
                'rubric_type' => 'Social-5'
            ],
            [
                'title' => 'Capacitarse para trabajar independientemente y en grupo, integrándose socialmente y contribuyendo al logro de la convivencia y la armonía (1 Pedro 3:11; Hebreos 12:14; Romanos 12:18; Romanos 14:19)',
                'non_compliance' => "El estudiante trabaja de manera individual pero <strong>no</strong> en grupo. <strong>Tampoco busca</strong> integrarse socialmente para contribuir al logro de la convivencia ni la armonía.",
                'partial_compliance' => "El estudiante trabaja de manera individual y grupal pero <strong>no le interesa</strong> integrarse socialmente para contribuir al logro de la convivencia <strong>y</strong> de la armonía.",
                'compliance' => "El estudiante muestra evidencias de <strong>tener y usar las capacidades</strong> propias para su grado, que le permiten trabajar de manera individual y en grupo, integrándose socialmente y contribuyendo al logro de la convivencia y la armonía.",
                'exceeds_compliance' => "El estudiante <strong>es líder y moderador</strong> al trabajar de manera individual y grupal, integrándose socialmente y contribuyendo al logro de la convivencia y la armonía.",
                'rubric_type' => 'Social-5'
            ],
            [
                'title' => 'Adoptar una visión bíblica del noviazgo, el matrimonio y la familia. (Efesios 5:21-33; 1 Pedro 3:1-7)',
                'non_compliance' => "El estudiante <strong>no</strong> demuestra <strong>ni</strong> comunica haber adoptado una visión bíblica del: 
                <ul><li>noviazgo,
                <li> el matrimonio,
                <li> <strong>ni</strong> la familia.</li></ul>",
                'partial_compliance' => "El estudiante comunica y demuestra haber adoptado una visión bíblica en <strong>alguno(s) de los siguientes aspectos</strong>:
                <ul><li> noviazgo,
                <li> el matrimonio,
                <li> <strong>o de</strong> la familia.</li></ul>",
                'compliance' => "El estudiante <strong>demuestra y comunica</strong> haber adoptado una visión bíblica del: 
                <ul><li>noviazgo,
                <li> el matrimonio,
                <li> y la familia.</li></ul>",
                'exceeds_compliance' => "El estudiante demuestra, comunica <strong>y promueve</strong> una visión bíblica del: 
                <ul><li>noviazgo,
                <li> el matrimonio,
                <li> y la familia.</li></ul>",
                'rubric_type' => 'Social-5'
            ],
            [
                'title' => 'Aprender a aplicar creativamente conocimientos intelectuales a fin de ser un recurso útil y preparado para desenvolverse en la sociedad en pro de la familia, la iglesia y el país (Gálatas 5:13; Romanos 12:10)',
                'non_compliance' => "El estudiante <strong>no muestra interés en aprender a aplicar</strong> creativamente conocimientos intelectuales, <strong>ni se esfuerza por ser</strong>, según su etapa de desarrollo, un recurso útil y preparado para desenvolverse en la sociedad en pro de:
                <ul><li> la familia,
                <li> la iglesia
                <li> y el país.</li></ul>",
                'partial_compliance' => "El estudiante <strong>procura aprender a aplicar</strong> creativamente conocimientos intelectuales, <strong>y evidencia esfuerzo por ser</strong>, según su etapa de desarrollo, un recurso útil y preparado para desenvolverse en la sociedad en pro de:
                <ul><li> la familia,
                <li> la iglesia
                <li> y el país.</li></ul>",
                'compliance' => "El estudiante <strong>demuestra un aprendizaje continuo aplicando</strong> creativamente y <strong>según su etapa de desarrollo</strong>, conocimientos intelectuales a fin de ser un recurso útil y preparado para desenvolverse en la sociedad en pro de:
                <ul><li> la familia,
                <li> la iglesia
                <li> y el país.</li></ul>",
                'exceeds_compliance' => "El estudiante <strong>aplica</strong> creativamente conocimientos intelectuales, <strong>siendo, según su etapa de desarrollo</strong>, un recurso útil y preparado para desenvolverse en la sociedad en pro de:
                <ul><li> la familia,
                <li> la iglesia
                <li> y el país.</li></ul>",
                'rubric_type' => 'Social-6'
            ],
            [
                'title' => 'Asimilar la práctica de responsabilidades cívicas como ciudadano responsable, siendo leales a Dios, al hogar, a la patria y al colegio, así como también tener una clara conciencia de la nacionalidad y de la solidaridad internacional. Mostrar respeto y obediencia a las autoridades (Romanos 13:1-7)',
                'non_compliance' => "El estudiante <strong>no demuestra haber asimilado</strong> la práctica de responsabilidades cívicas como ciudadano responsable:
                <ul><li> siendo leal a Dios, al hogar, a la patria y al colegio,
                <li> teniendo una clara conciencia de la nacionalidad y de la solidaridad internacional, mostrando respeto y obediencia a las autoridades.</li></ul>",
                'partial_compliance' => "El estudiante <strong>demuestra haber asimilado parcialmente</strong> la práctica de responsabilidades cívicas como ciudadano responsable, <strong>al cumplir alguna (s) de las siguientes</strong>:
                <ul><li> siendo leal a Dios, al hogar, a la patria y al colegio,
                <li> teniendo una clara conciencia de la nacionalidad y de la solidaridad internacional, mostrando respeto y obediencia a las autoridades.</li></ul>",
                'compliance' => "El estudiante <strong>demuestra haber asimilado</strong> la práctica de responsabilidades cívicas como ciudadano responsable:
                <ul><li> siendo leal a Dios, al hogar, a la patria y al colegio,
                <li> teniendo una clara conciencia de la nacionalidad y de la solidaridad internacional, mostrando respeto y obediencia a las autoridades.</li></ul>",
                'exceeds_compliance' => "El estudiante demuestra haber asimilado <strong>y promueve</strong> la práctica de responsabilidades cívicas como ciudadano responsable:
                <ul><li> siendo leal a Dios, al hogar, a la patria y al colegio,
                <li> teniendo una clara conciencia de la nacionalidad y de la solidaridad internacional, mostrando respeto y obediencia a las autoridades.</li></ul>",
                'rubric_type' => 'Social-6'
            ],
            [
                'title' => 'Tener una apreciación crítica de los idiomas y las culturas de otros pueblos, capaz de contrarrestar prejuicios étnicos; promover la armonía interracial y la práctica de la hospitalidad bíblica con el extranjero. (Gén. 11:1-931; Éx. 22:21; Heb. 13:2)',
                'non_compliance' => "El estudiante <strong>no demuestra</strong> tener una apreciación crítica de los idiomas (frases idiomáticas, jergas), ni las culturas de otros pueblos, por lo que <strong>no es capaz</strong> de contrarrestar prejuicios étnicos; <strong>ni promueve</strong> la armonía interracial, <strong>o</strong> práctica de la hospitalidad bíblica con el extranjero.",
                'partial_compliance' => "El estudiante <strong>demuestra</strong> tener una apreciación crítica de los idiomas (frases idiomáticas, jergas) y las culturas de otros pueblos, y es <strong>capaz</strong> de contrarrestar prejuicios étnicos; <strong>o</strong> promueve la armonía interracial <strong>y</strong> práctica de la hospitalidad bíblica con el extranjero.",
                'compliance' => "El estudiante demuestra tener una apreciación crítica de los idiomas (frases idiomáticas, jergas) y las culturas de otros pueblos, y es capaz de contrarrestar prejuicios étnicos; <strong>y</strong> promueve la armonía interracial y la práctica de la hospitalidad bíblica con el extranjero.",
                'exceeds_compliance' => "El estudiante tiene una apreciación crítica de los idiomas (frases idiomáticas, jergas) y las culturas de otros pueblos, <strong>anima a otros a evitar</strong> prejuicios y estereotipos étnicos; <strong>organiza y apoya actividades que promueven</strong> la armonía interracial y practica la hospitalidad <strong>bíblica</strong> con el extranjero.",

                'rubric_type' => 'Social-7'
            ],
            [
                'title' => 'Responder personalmente al desafío de cumplir la Gran Comisión en su localidad y alrededor del mundo de una manera sensible a las diferencias culturales. (Mateo 28: 18-20; Marcos 16:15)',
                'non_compliance' => "El estudiante <strong>no</strong> evidencia <strong>interés</strong> por evangelizar.",
                'partial_compliance' => "El estudiante <strong>evangeliza</strong>.",
                'compliance' => "El estudiante <strong>evangeliza activamente y da evidencias de discipular</strong> a otros, apoyando misiones locales o internacionales.",
                'exceeds_compliance' => "El estudiante muestra el deseo de <strong>servir formalmente en ministerios de evangelización y/o discipulado</strong>.",
                'rubric_type' => 'Social-7'
            ],
            [
                'title' => 'Demostrar aprecio por la naturaleza y el medio ambiente y practicar una mayordomía responsable de la creación de Dios. (Génesis 2:15-16, 19-20; Proverbios 12:10)',
                'non_compliance' => "El estudiante <strong>no demuestra</strong> aprecio (interés) por la naturaleza y el medio ambiente, y/o <strong>no practica</strong> una mayordomía responsable de la creación de Dios cuidándola.",
                'partial_compliance' => "El estudiante <strong>demuestra poco</strong> aprecio (interés) por la naturaleza y el medio ambiente, y/o practica una mayordomía responsable de la creación de Dios, demostrando <strong>poco cuidado a la misma</strong>.",
                'compliance' => "El estudiante <strong>demuestra</strong> aprecio (interés) por la naturaleza y el medio ambiente, y/o practica una mayordomía responsable de la creación de Dios, <strong>cuidándolas</strong>.",
                'exceeds_compliance' => "El estudiante demuestra <strong>gran</strong> aprecio (interés) por la naturaleza y el medio ambiente, y/o practica y <strong>promueve</strong> una mayordomía responsable de la creación de Dios cuidándolas.",
                'rubric_type' => 'Social-7'
            ],
            [
                'title' => 'Conocer los talentos con que Dios le ha favorecido y estar dispuesto a utilizarlos para Su honra y Su gloria en cualquier área del saber (1 Cor. 7:7; 1 Ped. 4:10)',
                'non_compliance' => "El estudiante <strong>desconoce</strong> sus talentos.",
                'partial_compliance' => "El estudiante <strong>conoce y es capaz de enumerar los talentos</strong> con que Dios le ha favorecido en diferentes áreas del saber (académica, espiritual, física, conductual, emocional). el estudiante <strong>utiliza sus talentos pero no los reconoce</strong> o no reconoce que fue Dios que se los dio.",
                'compliance' => "El estudiante <strong>conoce y es capaz de enumerar los talentos</strong> con que Dios le ha favorecido y da evidencia de estar <strong>dispuesto a utilizarlos con humildad</strong>, para la honra y gloria de Dios en cualquier área del saber.",
                'exceeds_compliance' => "El estudiante <strong>utiliza</strong> con humildad los talentos (académicos, espirituales, físicos, conductuales, emocionales) que Dios le ha dado <strong>para favorecer su comunidad escolar, familiar y eclesiástica</strong>, para la honra y gloria de Dios en cualquier área del saber.",
                'rubric_type' => 'Académico-8'
            ],
            [
                'title' => 'Aprender que toda verdad está sujeta y regulada por la Palabra de Dios. (Juan 17:17)',
                'non_compliance' => "El estudiante <strong>no cree</strong> que toda verdad está sujeta y regulada por la Palabra de Dios.",
                'partial_compliance' => "El estudiante <strong>cree que algunas verdades</strong> están sujetas y reguladas por la Palabra de Dios (y otras no).",
                'compliance' => "El estudiante da <strong>evidencia de conocer</strong> que toda verdad está sujeta y regulada por la Palabra de Dios.",
                'exceeds_compliance' => "El estudiante <strong>defiende con mansedumbre</strong> que toda verdad es verdad de Dios.",
                'rubric_type' => 'Académico-8'
            ],
            [
                'title' => 'Desarrollar habilidades de hacer preguntas, resolver problemas y tomar decisiones sabias. (1 Crónicas 28:8-9; Job 8:5-10)',
                'non_compliance' => "El estudiante <strong>no</strong> demuestra haber desarrollado habilidades esperadas para su grado al:
                <ul><li> hacer preguntas, 
                <li>resolver problemas, 
                <li>ni tomar decisiones sabias.</li></ul>",
                'partial_compliance' => "El estudiante demuestra haber desarrollado <strong>algunas de las siguientes habilidades</strong> esperadas para su grado al:
                <ul><li> hacer preguntas,
                <li>resolver problemas
                <li>y tomar decisiones sabias.</li></ul>",
                'compliance' => "El estudiante <strong>demuestra</strong> haber desarrollado habilidades esperadas para su grado al:
                <ul><li> hacer preguntas,
                <li> resolver problemas
                <li> y tomar decisiones sabias.</li></ul>",
                'exceeds_compliance' => "El estudiante demuestra haber desarrollado habilidades <strong>excepcionales para su grado</strong> al:
                <ul><li> hacer preguntas,
                <li> resolver problemas
                <li> y tomar decisiones sabias.</li></ul>",
                'rubric_type' => 'Académico-8'
            ],
            [
                'title' => 'Conocer las doctrinas básicas de la Biblia (2 Tesalonicenses 2:15)',
                'non_compliance' => "El estudiante <strong>no conoce</strong> las doctrinas básicas de la Biblia:
                <ul><li> existencia de un Dios su persona y carácter,
                <li> la obra de Cristo (<em>redención</em>),
                <li> la obra del Espíritu Santo (<em>santificación</em>),
                <li> autoridad de la Biblia,
                <li> la creación, caída y condición del hombre,
                <li> Dios como ente determinante del bien y mal,
                <li> justificación por gracia.</li></ul>",
                'partial_compliance' => "El estudiante <strong>conoce y es capaz de explicar algunas</strong> de las doctrinas básicas de la Biblia:
                <ul><li> existencia de un Dios su persona y carácter,
                <li> la obra de Cristo (<em>redención</em>),
                <li> la obra del Espíritu Santo (<em>santificación</em>),
                <li> autoridad de la Biblia,
                <li> la creación, caída y condición del hombre,
                <li> Dios como ente determinante del bien y mal,
                <li> justificación por gracia.</li></ul>",
                'compliance' => "El estudiante <strong>conoce y explica</strong> las doctrinas básicas de la Biblia:
                <ul><li> existencia de un Dios su persona y carácter,
                <li> la obra de Cristo (<em>redención</em>),
                <li> la obra del Espíritu Santo (<em>santificación</em>),
                <li> autoridad de la Biblia,
                <li> la creación, caída y condición del hombre,
                <li> Dios como ente determinante del bien y mal,
                <li> justificación por gracia.</li></ul>",
                'exceeds_compliance' => "El estudiante conoce, explica, <strong>promueve y defiende</strong> las doctrinas básicas de la Biblia:
                <ul><li> existencia de un Dios su persona y carácter,
                <li> la obra de Cristo (<em>redención</em>),
                <li> la obra del Espíritu Santo (<em>santificación</em>),
                <li> autoridad de la Biblia,
                <li> la creación, caída y condición del hombre,
                <li> Dios como ente determinante del bien y mal,
                <li> justificación por gracia.</li></ul>",
                'rubric_type' => 'Académico-9'
            ],
            [
                'title' => 'Aprender a relacionar toda verdad a la verdad de Dios, habiendo cultivado el poder del pensamiento crítico, analítico, reflexivo y creativo (1 Cor.10:23; 1 Tes. 5:21)',
                'non_compliance' => "El estudiante <strong>no</strong> relaciona toda verdad a la verdad de Dios</strong>.",
                'partial_compliance' => "El estudiante relaciona toda verdad a la verdad de Dios, <strong>pero sin utilizar un pensamiento crítico, analítico, reflexivo y creativo</strong>.",
                'compliance' => "El estudiante <strong>relaciona toda verdad a la verdad de Dios</strong>, habiendo cultivado un pensamiento crítico, analítico, reflexivo y creativo.",
                'exceeds_compliance' => "El estudiante es <strong>capaz de explicar cómo</strong> toda verdad se relaciona a la verdad de Dios <strong></strong>, habiendo cultivado un pensamiento crítico, analítico, reflexivo y creativo.",
                'rubric_type' => 'Académico-9'
            ],
            [
                'title' => 'Saber cómo utilizar recursos, incluyendo recursos tecnológicos, para obtener, analizar y evaluar información. (Proverbios 2:3-7; Hechos 17:11)',
                'non_compliance' => "El estudiante <strong>no evidencia destrezas</strong> para obtener, analizar y evaluar información mediante el uso de recursos, incluyendo recursos tecnológicos y recursos impresos.",
                'partial_compliance' => "El estudiante <strong>evidencia destrezas parciales</strong> para obtener, analizar y evaluar información mediante el uso de recursos, incluyendo recursos tecnológicos y recursos impresos.",
                'compliance' => "El estudiante <strong>evidencia destrezas</strong> para obtener, analizar y evaluar información mediante el uso de recursos, incluyendo recursos tecnológicos y recursos impresos.",
                'exceeds_compliance' => "El estudiante evidencia destrezas <strong>excepcionales</strong> para obtener, analizar y evaluar información mediante el uso de recursos, incluyendo recursos tecnológicos y recursos impresos.",
                'rubric_type' => 'Académico-9'
            ],
            [
                'title' => 'Investigar lógicamente y desde una perspectiva bíblica (Romanos 12:24)',
                'non_compliance' => "El estudiante <strong>no es capaz de realizar</strong> investigaciones lógicas.",
                'partial_compliance' => "El estudiante <strong>es capaz</strong> de realizar investigaciones lógicas pero no incluye una perspectiva bíblica.",
                'compliance' => "El estudiante es capaz de realizar investigaciones lógicas <strong>desde una perspectiva bíblica</strong>.",
                'exceeds_compliance' => "El estudiante es capaz de realizar investigaciones lógicas y <strong>éticas</strong> desde una perspectiva bíblica y <strong>puede enseñar a otros a hacer lo mismo</strong>.",
                'rubric_type' => 'Académico-10'
            ],
            [
                'title' => 'Ser capaz de defender en forma articulada la cosmovisión cristiana que poseen, y al mismo tiempo tener un entendimiento básico de otras cosmovisiones antagónicas. (1 Pedro 3:15; 1 Tesalonicenses 5:20-24)',
                'non_compliance' => "El estudiante no da evidencias de tener una cosmovisión cristiana (teísmo cristiano). Y/ o el estudiante <strong>conoce</strong> su cosmovisión <strong>pero no puede explicarla ni defenderla</strong>.",
                'partial_compliance' => "El estudiante es capaz de <strong>enunciar o defender</strong> la cosmovisión cristiana que posee (teísmo cristiano), <strong>pero no tiene un entendimiento básico</strong> de otras cosmovisiones antagónicas (deísmo, naturalismo, nihilismo, existencialismo, monismo panteísta oriental, Nueva Era, o postmodernismo), <strong>o</strong> el estudiante es capaz de explicar las diferentes cosmovisiones <strong>, pero no ha adoptado</strong> la cosmovisión cristiana.",
                'compliance' => "El estudiante es <strong>capaz de defender</strong> en forma articulada la cosmovisión cristiana que posee (teísmo cristiano), <strong>y muestra un entendimiento básico de otras cosmovisiones antagónicas</strong> (deísmo, naturalismo, nihilismo, existencialismo, monismo panteísta oriental, Nueva Era, o postmodernismo).",
                'exceeds_compliance' => "El estudiante es capaz de defender en forma articulada la cosmovisión cristiana que posee (teísmo cristiano), <strong>y</strong> muestra un claro entendimiento de otras cosmovisiones antagónicas (deísmo, naturalismo, nihilismo, existencialismo, monismo panteísta oriental, Nueva Era, o postmodernismo) <strong>, llevando a otros a entenderlas y adoptar la cristiana</strong>.",
                'rubric_type' => 'Académico-10'
            ],
            [
                'title' => 'Estar bien preparado en todas las disciplinas académicas, poseer aptitudes de lectura, escritura, oratoria, habilidad de escuchar y razonar. (Proverbios 4:5-8)',
                'non_compliance' => "El estudiante <strong>no logra los objetivos esperados para el grado</strong> en las asignaturas académicas, especialmente en lectura, escritura, oratoria, habilidad de escuchar y razonar.",
                'partial_compliance' => "El estudiante <strong>logra con ayuda</strong> los objetivos esperados para el grado en las asignaturas académicas, especialmente en lectura, escritura, oratoria, habilidad de escuchar y razonar.",
                'compliance' => "El estudiante <strong>logra sin ayuda</strong> los objetivos esperados para el grado en las asignaturas académicas, especialmente en lectura, escritura, oratoria, habilidad de escuchar y razonar.",
                'exceeds_compliance' => "El estudiante <strong>excede</strong> los objetivos esperados para el grado en las asignaturas <strong>lingüísticas</strong>.",
                'rubric_type' => 'Académico-10'
            ],
            [
                'title' => 'Tener una visión bíblica que exprese y moldee su correcto aprecio por la literatura y las artes, con una comprensión de cómo ellas pueden afectar nuestras creencias y valores. (1 Tesalonicenses 5:20-24)',
                'non_compliance' => "El estudiante <strong>no demuestra</strong> tener una visión bíblica que exprese y moldee su correcto aprecio por la literatura y las artes; <strong>ni</strong> una comprensión de cómo ellas pueden afectar las creencias y valores.",
                'partial_compliance' => "El estudiante demuestra tener una visión bíblica <strong>limitada</strong> para explicar y moldear su correcto aprecio por la literatura y las artes, y/o <strong>una limitada</strong> comprensión de cómo ellas pueden afectar las creencias y valores.",
                'compliance' => "El estudiante <strong>demuestra</strong> tener una visión bíblica que expresa (explica) y moldea su correcto aprecio por la literatura y las artes, <strong>con</strong> una comprensión de cómo ellas afectan las creencias y valores.",
                'exceeds_compliance' => "El estudiante <strong>promueve</strong> una visión bíblica que expresa y moldea su correcto aprecio por la literatura y las artes, y <strong>promueve</strong> una comprensión de cómo ellas afectan las creencias y valores.",
                'rubric_type' => 'Académico-11'
            ],
            [
                'title' => 'Adquirir conocimiento y comprensión acerca de los pueblos, eventos, movimientos históricos (incluyendo la historia de la iglesia cristiana) y las culturas de otros pueblos y lugares. (Deuteronomio 32: 6-7)',
                'non_compliance' => "El estudiante <strong>no demuestra</strong> tener conocimiento ni comprensión apropiados para su grado, acerca de los pueblos, eventos, movimientos históricos (incluyendo la historia de la iglesia cristiana) ni las culturas de otros pueblos y lugares.",
                'partial_compliance' => "El estudiante demuestra tener conocimiento y comprensión <strong>parcial</strong> apropiados para su grado, acerca de los pueblos, eventos, movimientos históricos (incluyendo la historia de la iglesia cristiana) y las culturas de otros pueblos y lugares.",
                'compliance' => "El estudiante <strong>demuestra</strong> tener conocimiento y comprensión apropiados para su grado, acerca de los pueblos, eventos, movimientos históricos (incluyendo la historia de la iglesia cristiana) y las culturas de otros pueblos y lugares.",
                'exceeds_compliance' => "El estudiante demuestra tener <strong>gran interés</strong>, conocimiento y comprensión apropiados para su grado, acerca de los pueblos, eventos, movimientos históricos (incluyendo la historia de la iglesia cristiana) y las culturas de otros pueblos y lugares.",
                'rubric_type' => 'Académico-11'
            ],
            [
                'title' => 'Desarrollar un espíritu innovador e investigativo que le permita comprobar teológicamente el porqué de los fenómenos naturales y sociales (Colosenses 2:8)',
                'non_compliance' => "El estudiante no demuestra interés por los fenómenos naturales y sociales.",
                'partial_compliance' => "El estudiante evidencia un espíritu innovador e investigativo de los fenómenos naturales y sociales sin explicarlos teológicamente.",
                'compliance' => "El estudiante comprueba teológicamente la razón de los fenómenos naturales y sociales, evidenciando un espíritu innovador e investigativo.",
                'exceeds_compliance' => "El estudiante muestra iniciativa en investigar, innovar y comprobar teológicamente los fenómenos naturales y sociales.",
                'rubric_type' => 'Académico-11'
            ],
            [
                'title' => 'Ser competente en las áreas de matemáticas y ciencias. (Proverbios 18:15; Proverbios 24:4)',
                'non_compliance' => "El estudiante <strong>no logra los objetivos esperados para el grado</strong> en las asignaturas de matemáticas y ciencias.",
                'partial_compliance' => "El estudiante <strong>logra con ayuda</strong> los objetivos esperados para el grado en las asignaturas de matemáticas y ciencias.",
                'compliance' => "El estudiante <strong>logra sin ayuda</strong> los objetivos esperados para el grado en las asignaturas de matemáticas y ciencias.",
                'exceeds_compliance' => "El estudiante <strong>excede</strong> los objetivos esperados para el grado en las asignaturas de matemáticas y ciencias.",
                'rubric_type' => 'Académico-12'
            ],
            [
                'title' => 'Comprometerse a no dejar de aprender a lo largo de su vida. (Prov. 4:5-9)',
                'non_compliance' => "El estudiante <strong>no</strong> demuestra <strong>ni</strong> comunica un compromiso de aprender de manera continua a lo largo de su vida.",
                'partial_compliance' => "El estudiante <strong>comunica la importancia de</strong> aprender de manera continua a lo largo de su vida, <strong>pero no lo demuestra</strong>.",
                'compliance' => "El estudiante <strong>demuestra y/o comunica</strong> un compromiso de aprender de manera continua a lo largo de su vida.",
                'exceeds_compliance' => "El estudiante comunica un compromiso de aprender de manera continua a lo largo de su vida <strong>y lo demuestra al aprender otras destrezas y conocimientos fuera del currículo escolar de manera voluntaria</strong>.",
                'rubric_type' => 'Académico-12'
            ],
            [
                'title' => 'Ejercitar la vida intelectual, sin tener reservas de participar en un intercambio de ideas abierto y honesto. (Hechos 13:43-49; 2 Cor. 5:11; 2 Tim. 3:14-17)',
                'non_compliance' => "El estudiante <strong>no participa sabiamente, con honestidad y sin reservas (sin amedrentarse)</strong> en intercambios abiertos de ideas, <strong>ni</strong> ejercita su vida intelectual, al leer y exponerse a análisis realizados por otras personas.",
                'partial_compliance' => "El estudiante participa en intercambios <strong>pero no</strong> sabiamente, con honestidad o sin reservas (sin amedrentarse) <strong>o</strong> ejercita su vida intelectual, al leer y exponerse a análisis realizados por otras personas <strong>pero no</strong> participa sabiamente con honestidad y sin reservas (sin miedo).",
                'compliance' => "El estudiante <strong>participa sabiamente con honestidad y sin reservas (sin amedrentarse)</strong> en intercambios abiertos de ideas, <strong>y</strong> ejercita su vida intelectual, al leer y exponerse a análisis realizados por otras personas, <strong>filtrándolo todo por la Palabra de Dios</strong>.",
                'exceeds_compliance' => "El estudiante participa sabiamente con honestidad y sin reservas (sin amedrentarse) en intercambios abiertos de ideas, <strong>y</strong> ejercita y <strong>promueve</strong> la vida intelectual, por medio de la lectura y la exposición a análisis realizados por otras personas, filtrándolo todo por la Palabra de Dios.",
                'rubric_type' => 'Académico-12'
            ],
            [
                'title' => 'Respetar su cuerpo como templo del Espíritu Santo, cuidándolo y utilizándolo para Dios (1 Corintios 3:16)',
                'non_compliance' => "El estudiante <strong>no cuida su cuerpo de manera consistente</strong> (<em>no mantiene una higiene adecuada, no muestra interés en ejercitarse, consume alimentos que le hacen daño, es arriesgadamente imprudente o lacera su cuerpo).</em>",
                'partial_compliance' => "El estudiante <strong>cuida su cuerpo</strong> y <strong>lo usa para bien</strong>, pero no porque lo considere o entienda que es templo del Espíritu Santo.",
                'compliance' => "El estudiante <strong>reconoce su cuerpo como templo del Espíritu Santo</strong> y por tanto, da evidencias de <strong>cuidarlo</strong> y <strong>utilizarlo</strong> para servir a Dios.",
                'exceeds_compliance' => "El estudiante respeta su cuerpo como templo del Espíritu Santo, cuidándolo, utilizándolo para Dios y <strong>animando a otros a hacer lo mismo</strong>.",
                'rubric_type' => 'Físico-4'
            ],
            [
                'title' => 'Estar bien capacitado(a) para comunicarse, estudiar, trabajar y ministrar utilizando el idioma inglés, poseyendo buenas habilidades de comunicación, lectura y escritura en dicho idioma.',
                'non_compliance' => "El estudiante no demuestra estar capacitado(a) para comunicarse en inglés.",
                'partial_compliance' => "El estudiante demuestra estar capacitado(a) para comunicarse rudimentariamente en inglés, evidenciando habilidades limitadas en la comunicación, lectura y/o escritura, en un ambiente de carácter laboral y académico.",
                'compliance' => "El estudiante demuestra estar capacitado(a) para comunicarse, estudiar, trabajar y ministrar en Inglés, exhibiendo buenas habilidades de comunicación, lectura y escritura.",
                'exceeds_compliance' => "El estudiante utiliza el idioma inglés para comunicarse, estudiar, trabajar y ministrar exhibiendo excelentes habilidades de comunicación, lectura y escritura excepcionales para su grado.",
                'rubric_type' => 'Académico-12'
            ],

        );

        $result = $this->ci->Rubric_model->insert_many($data, $truncate = TRUE);

        if ($result) {
            echo "$result registros insertados exitosamente" . PHP_EOL;
        }
    }
}
