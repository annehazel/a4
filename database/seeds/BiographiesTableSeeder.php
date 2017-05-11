<?php

use Illuminate\Database\Seeder;
use App\Biography;

class BiographiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Biography::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'submitted_on' => '2017-04-25',
            'text' => 'Distance education teacher for the Lincoln Institute of Land Policy.
            Graduated in Civil Engineering and Doctor in Civil Engineering. Researcher of Unisinos
            and CNPq. Teacher and advisor on the programmes of Doctorate on Civil Engineering Doctoral
            and Master on Architecture in Unisinos. His research field includes real estate market,
            sustainable construction, costs and performance of buildings.',
            'language_id' => 1,
            'person_id' => 1,

        ]);
        
        Biography::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'submitted_on' => '2016-04-25',
            'text' => 'Profesor de cursos EAD de Lincoln Institute. Ingeniero Civil y Doctor en Ingeniería.
            Investigador de Unisinos y CNPq. Profesor de los cursos de Doctorado en Ingenieria y de Maestria
            en Arquitectura en Unisinos. Las áreas de investigación incluyen mercado inmobiliario, construction
            sostenible, costes y disempeño de las edificaciones.',
            'language_id' => 2,
            'person_id' => 1,

        ]);
        
        Biography::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'submitted_on' => '2016-04-25',
            'text' => 'Professor de cursos de ensino à distancia do Lincoln Institute. Engenheiro Civil e Doutor
            em Engenharia. Pesquisador da Unisinos e do CNPq. Professor dos cursos de Doutorado em Engenharia e
            de Mestrado em Arquitetura na Unisinos. As áreas de pesquisa envolvem o mercado imobiliário, construções
            sustentáveis, custos e desempenho das edificações.',
            'language_id' => 3,
            'person_id' => 1,

        ]);
        
        Biography::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'submitted_on' => '2016-04-25',
            'text' => 'Catalina Molinatti es arquitecta por la Universidad Nacional de Córdoba, Argentina, maestra en
            Desarrollo Urbano por El Colegio de México y está especializada en Políticas de Suelo Urbano por el Instituto
            Lincoln de Políticas de Suelo. Consultora en planificación estratégica participativa y en instrumentos de
            gestión y financiamiento urbanos en diversos municipios argentinos desde 1997. Colabora para el Programa para
            América Latina del Instituto Lincoln de Políticas de Suelo en cursos de desarrollo profesional sobre mercados
            de suelo urbano, recuperación de plusvalías y herramientas de financiamiento urbano desde 2005. Dicta cursos de
            postgrado sobre instrumentos de movilización de plusvalías en la Universidad Nacional de Córdoba. Participó en
            el revalúo y reforma tributaria de la ciudad de Córdoba de 2008 y colabora desarrollando e implementando metodologías
            para la recuperación de plusvalías en la Municipalidad de Córdoba.',
            'language_id' => 2,
            'person_id' => 2,
        ]);
        
        Biography::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'submitted_on' => '2016-04-25',
            'text' => 'Catalina Molinatti e arquiteta pela Universidad Nacional de Córdoba, Argentina, mestre em Desenvolvimento
            Urbano por El Colegio de México e especializada em Políticas de Solo Urbano pelo Lincoln Institute of Land Policy.
            Consultora em planejamento estratégico participativo e em ferramentas de gestão e financiamento urbanos para vários
            municípios argentinos desde 1997. Colaboradora do Latin American Program do Lincoln Institute of Land Policy em cursos
            de desenvolvimento profissional sobre mercados do solo urbano, recuperação das mais valias fundiarias e em ferramentas
            de finaciamento urbano desde 2005. Docente da pós-graduação em ferramentas de mobilização de mais valias fundiárias na
            Universidad Nacional de Córdoba. Participou na re-avaliação imobiliária é reforma tributária da cidade de Córdoba de
            2008 é colabora no desenvolvimento e implementação de metodologias de recuperação de mais valias fundiárias em a
            Municipalidade de Córdoba.',
            'language_id' => 3,
            'person_id' => 2,
        ]);
        
        
        Biography::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'submitted_on' => '2017-04-25',
            'text' => "Catalina Molinatti is an architect from Universidad Nacional de Córdoba, Argentina, she has a Master's degree
            of Urban Development from El Colegio de México A.C. and is specialized in Urban Land Policies from the Lincoln Institute of
            Land Policy. She is consultant on participative strategic planning, urban management and financing tools for many argentine
            municipalities since 1997. She collaborates for the Latin American Program of the Lincoln Institute of Land Policy teaching
            professional development courses on urban land markets, land value capture and urban financing tools since 2005. She teaches
            postgraduate courses on land value capture instruments at Universidad Nacional de Córdoba. She worked for the property value
            re-assessment and property tax reform of the city of Córdoba of 2008 and collaborates for developing and implementing
            methodologies for land value capture for the Municipality of Cordoba.",
            'language_id' => 1,
            'person_id' => 2,
        ]);
        
        
        Biography::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'submitted_on' => '2016-04-25',
            'text' => 'Arquitecta con especialización en Economía y maestría en Planeación y Desarrollo Urbano. Asesora en planeación y
            gestión urbana en diferentes entidades de la ciudad de Bogotá (Secretaría Distrital de Planeación, Secretaría de Hábitat, Empresa
            de Acueducto y Alcantarillado, Metrovivienda, entre otras). En los últimos años trabajó en temas de gestión de renovación de
            la ciudad de Bogotá. Fue Directora de Planes Parciales de la Secretaría Distrital de Planeación de Bogotá, asesora para la
            implementación de la participación en Plusvalías, planes parciales y reajuste de tierras en diferentes ciudades de Colombia,
            consultora del PNUD, CAF, BID y funcionaria del Ministerio de Ambiente y Vivienda de Colombia.',
            'language_id' => 2,
            'person_id' => 3,
        ]);
        
        
        Biography::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'submitted_on' => '2015-04-25',
            'text' => 'Arquiteta com especialização em Economia e mestrado em Planejamento e Desenvolvimento Urbano. Assessora em planejamento
            e gestão urbana em diferentes entidades da cidade de Bogotá (Secretaría Distrital de Planeación, Secretaría de Hábitat, Empresa de
            Acueducto y Alcantarillado, Metrovivienda, entre outras). Nos últimos anos trabalhou em temas de gestão da renovação urbana no
            centro de Bogotá. Foi Diretora de Planos Parciais da Secretaría Distrital de Planeación de Bogotá, assessora para a implementação
            da participação em plusvalias y reajuste de terras em diferentes cidades, consultora do PNUD, CAF e BID, e funcionária do Ministerio
            de Ambiente, Vivienda y Desarrollo Territorial de Colombia.',
            'language_id' => 3,
            'person_id' => 3,
        ]);
        
        
        Biography::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'submitted_on' => '2017-04-25',
            'text' => "Architect with postgraduate studies in economy and development and urban planning. Advisor on urban planning and management
            for the public sector (mayor's office, planning and housing offices, water and sewage company among others). In the last years, she
            has been working on renewal and revitalization projects on Bogotá´s central areas. She was partial plans director in Bogotá, advisor
            for land value recapture and land readjustment in different cities, consultant for PNUD, CAF and BID and public servant on the Environment,
            Housing and Territorial Development Ministry.",
            'language_id' => 1,
            'person_id' => 3,
        ]);
        
        
        Biography::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'submitted_on' => '2016-04-25',
            'text' => 'Tiene formación en Ingeniería en Agrimensura por la "União das Faculdades de Criciúma", un título de maestría en "Cadastro
            Técnico Multifinalitario" y doctorado en "Engenharia de Produção" por la "Universidade Federal de Santa Catarina". Enseñó "Catastro Técnico
            Municipal, Loteamento e Divisão e Demarcação de Terras" en la "Universidade do Extremo Sul Catarinense". Coordinó trabajos de relevamientos
            catastrales y valuación masiva de inmuebles con fines fiscales en algunas ciudades brasileñas y empresas de cartografía y catastro. Es
            profesor asociado en el "Lincoln Institute of Land Policy", donde colabora en los cursos de educación a distancia y presenciales. Es profesor
            de la "Universidade Federal de Santa Catarina" en el Departamento de Geociencias. Está acreditado en el curso de Postgrado de "Engenharia de
            Transportes e Gestão Territorial", en la línea de investigación de Catastro Territorial Multifinalitario. Brasil.',
            'language_id' => 2,
            'person_id' => 4,
        ]);
        
        Biography::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'submitted_on' => '2015-04-25',
            'text' => 'Formado em Engenharia de Agrimensura pela União das Faculdades de Criciúma, com mestrado em Cadastro Técnico Multifinalitário e
            doutorado em Engenharia de Produção pela Universidade Federal de Santa Catarina - UFSC. Foi professor das disciplinas de Cadastro Técnico
            Municipal, Loteamento e Divisão e Demarcação de Terras na Universidade do Extremo Sul Catarinense. Coordenou trabalhos de levantamentos cadastrais
            e avaliação em massa de imóveis para fins fiscais em algumas cidades brasileiras como consultor ou em empresas de cartografia e cadastro.
            Atua como professor associado no "Lincoln Institute of Land Policy", colaborando em cursos à distância e presenciais. É professor da Universidade
            Federal de Santa Catarina junto ao Departamento de Geociências. Está credenciado no Programa de Pós-Graduação em Engenharia de Transportes e
            Gestão Territorial, na linha de pesquisa em Cadastro Territorial Multifinalitário. Brasil.',
            'language_id' => 3,
            'person_id' => 4,
        ]);
        
        Biography::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'submitted_on' => '2016-04-25',
            'text' => 'Egresada de la Licenciatura en Urbanismo de la Facultad de Arquitectura, Universidad Nacional Autónoma de México (UNAM), en donde
            también ha realizado diversos cursos de actualización relacionados con la política urbana de ordenamiento territorial y actualmente es docente
            de la asignatura "Análisis Histórico Crítico del Urbanismo II". En la UNAM ha participado en actividades de investigación sobre estructura urbana,
            mercado de suelo, política de vivienda e historia del urbanismo en México, en la Facultad de Arquitectura, el Instituto de Investigaciones Sociales,
            el Programa Universitario de Estudios sobre la Ciudad y el Instituto de Geografía. Es coautora y colaboradora de varios artículos en libros, en
            temas como: finanzas públicas, política de suelo y vivienda e historia del desarrollo urbano en México.',
            'language_id' => 2,
            'person_id' => 5,
        ]);
        
        
        
    }
}
