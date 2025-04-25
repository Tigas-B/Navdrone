-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Abr-2025 às 12:39
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `navdrone_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `backoffice`
--

CREATE TABLE `backoffice` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `backoffice`
--

INSERT INTO `backoffice` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Jonathan', 'teste', 'joy2025');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `imagem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `imagem`) VALUES
(2, 'http://localhost/portfolio/navdrone/uploads/fotografia_arquitectura_4.jpg'),
(3, 'http://localhost/portfolio/Navdrone/uploads/fotografia_drone_5.jpg'),
(4, 'http://localhost/portfolio/navdrone/uploads/destaque_2.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `telemovel` varchar(20) NOT NULL,
  `atendimento` varchar(50) NOT NULL,
  `morada` varchar(500) NOT NULL,
  `facebook` longtext NOT NULL,
  `instagram` longtext NOT NULL,
  `youtube` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `email`, `telemovel`, `atendimento`, `morada`, `facebook`, `instagram`, `youtube`) VALUES
(1, 'geral@navdrone.pt', '918 301 977', '2ª a 6ª | 09h - 18h', 'Praceta do Autarca, nº6 4720-410 Amares - Braga | Portugal', 'https://www.facebook.com/navdrone.pt/', 'https://www.instagram.com/navdrone/', 'https://www.youtube.com/@navdrone');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotografias`
--

CREATE TABLE `fotografias` (
  `id` int(11) NOT NULL,
  `imagem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `fotografias`
--

INSERT INTO `fotografias` (`id`, `imagem`) VALUES
(1, 'http://localhost/portfolio/Navdrone/uploads/fotografia_arquitectura_2.jpg'),
(2, 'http://localhost/portfolio/Navdrone/uploads/destaque_1.jpg'),
(3, 'http://localhost/portfolio/Navdrone/uploads/fotografia_imoveis_3.jpg'),
(4, 'http://localhost/portfolio/Navdrone/uploads/fotografia_arquitectura_4.jpg'),
(6, 'http://localhost/portfolio/Navdrone/uploads/fotografia_obra_6.jpg'),
(7, 'http://localhost/portfolio/Navdrone/uploads/fotografia_drone_5.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `texto` varchar(2000) DEFAULT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `texto`, `categoria`) VALUES
(1, 'Na NavDrone, capturamos a essência do seu projeto através de Fotografia e Vídeo Profissional, incluindo Visitas Virtuais 360° e Modelos 3D, para levar a sua empresa a outro nível.\r\nSeja no setor da construção, indústria, comércio, turismo, imobiliário ou arquitetura, garantimos imagens envolventes e de alta qualidade, que elevam a apresentação do seu trabalho e cativam o seu público.', 'intro_home'),
(2, 'Os conteúdos digitais, assumem um papel fundamental na estratégia de posicionamento das empresas.\r\nCriamos conteúdo relevante, que atende às diversas necessidades do seu negócio.', 'intro_servicos'),
(6, 'Capturamos os seus produtos ou serviços, mesmo quando é necessário fazê-lo do ar com recurso a drone', 'intro_producao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `politica`
--

CREATE TABLE `politica` (
  `id` int(11) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `politica`
--

INSERT INTO `politica` (`id`, `texto`) VALUES
(1, '<h1><span style=\"font-size: 18pt;\">1. Que tipo de informa&ccedil;&otilde;es pessoais recolhemos ?</span></h1>\r\n<p>Solicitamos informa&ccedil;&otilde;es de identifica&ccedil;&atilde;o pessoal quando acede &agrave; p&aacute;gina contactos e faz um pedido de informa&ccedil;&atilde;o atrav&eacute;s do formul&aacute;rio online.</p>\r\n<p>A decis&atilde;o de inserir os seus dados pessoais &eacute; sempre sua. Se n&atilde;o quiser fornecer essas informa&ccedil;&otilde;es pelo formul&aacute;rio, poder&aacute; contactar-nos pelos meios alternativos.</p>\r\n<p>Quando visita o nosso website, recolheremos informa&ccedil;&otilde;es conhecidas como &ldquo;clickstreams&rdquo; (endere&ccedil;o IP, nome do dom&iacute;nio, etc.). Estas informa&ccedil;&otilde;es, combinadas com os dados que nos facultou, permitem-nos personalizar melhor as suas visitas.</p>'),
(2, '<h1><span style=\"font-size: 18pt;\">2. Como usamos as informa&ccedil;&otilde;es que recolhemos ?</span></h1>\r\n<p>Usamos as informa&ccedil;&otilde;es pessoais das seguintes formas:</p>\r\n<p>1. Para lhe fornecer informa&ccedil;&otilde;es sobre os nossos servi&ccedil;os e-mails informativos.</p>\r\n<p>2. Para nos ajudar a criar conte&uacute;dos relevantes para si;</p>\r\n<p>3. Para lhe disponibilizar ofertas especiais que possam ser do seu interesse;</p>\r\n<p>4. Para nos ajudar a criar melhores categorias e/ou servi&ccedil;os que satisfa&ccedil;am as suas necessidades.</p>'),
(3, '<h1><span style=\"font-size: 18pt;\">3. Quem tem acesso &agrave;s suas informa&ccedil;&otilde;es pessoais e at&eacute; que ponto?</span></h1>\r\n<p>Al&eacute;m do nosso website e para os efeitos acima descritos, n&atilde;o vendemos, trocamos ou transferimos a terceiros as suas informa&ccedil;&otilde;es pessoais, sob forma alguma, sem previamente o informarmos de tal situa&ccedil;&atilde;o, e sempre em conformidade com a legisla&ccedil;&atilde;o actualmente em vigor relativa &agrave; protec&ccedil;&atilde;o das informa&ccedil;&otilde;es pessoais.</p>'),
(4, '<h1><span style=\"font-size: 18pt;\">4. Cookies</span></h1>\r\n<p>Este website poder&aacute; utilizar a tecnologia amplamente conhecida na ind&uacute;stria como &ldquo;cookies&rdquo;. Um cookie &eacute; um ficheiro de texto &uacute;nico que um Website envia para o software do seu navegador (browser). Os cookies permitem que um Website personalize as informa&ccedil;&otilde;es que lhe s&atilde;o apresentadas, com base nas suas prefer&ecirc;ncias de navega&ccedil;&atilde;o. Poderemos usar cookies para personalizar as suas p&aacute;ginas ou para se &ldquo;recordar&rdquo; de si quando registar links ou servi&ccedil;os. Se n&atilde;o desejar que o website instale cookies no seu navegador (browser), poder&aacute; definir o mesmo para rejeitar cookies. A rejei&ccedil;&atilde;o de cookies poder&aacute; afectar a sua capacidade de utilizar alguns dos servi&ccedil;os do nosso website.</p>'),
(5, '<h1><span style=\"font-size: 18pt;\">5. Altera&ccedil;&otilde;es &agrave; pol&iacute;tica de privacidade</span></h1>\r\n<p>No futuro, poderemos optar por modificar ou actualizar esta pol&iacute;tica, quer devido a altera&ccedil;&otilde;es na legisla&ccedil;&atilde;o, quer por forma a abranger novos desenvolvimentos da Internet. Assim sendo, reservamo-nos o direito de efectuar quaisquer altera&ccedil;&otilde;es nesse sentido e solicitamos que visite esta p&aacute;gina regularmente para manter-se informado.</p>'),
(6, '<h1><span style=\"font-size: 18pt;\">6. Publicidade no site</span></h1>\r\n<p>Terceiros, incluindo o Google, usam cookies para veicular an&uacute;ncios com base em visitas anteriores do utilizador a este website.</p>\r\n<p>Com o uso do cookie da DoubleClick, o Google e seus parceiros podem veicular an&uacute;ncios para seus utilizadores com base nas visitas feitas a seus sites e/ou a outros sites na Internet.</p>\r\n<p>Os utilizadores podem desativar o uso do cookie da DoubleClick para publicidade com base em interesses acedendo &agrave;s Configura&ccedil;&otilde;es de an&uacute;ncios.</p>'),
(7, '<hr>\r\n<h1 style=\"text-align: center;\"><span style=\"font-size: 18pt;\">RESOLU&Ccedil;&Atilde;O ALTERNATIVA DE LIT&Iacute;GIOS DE CONSUMO (RAL)</span></h1>\r\n<p>&nbsp;</p>\r\n<p>Em caso de lit&iacute;gio, o consumidor pode recorrer a uma Entidade de Resolu&ccedil;&atilde;o Alternativa de Conflitos de Consumo (RAL).</p>\r\n<p>CIAB &ndash; Centro de Informa&ccedil;&atilde;o, Media&ccedil;&atilde;o e Arbitragem de Consumo</p>\r\n<p>Braga: Rua D. Afonso Henriques, n&ordm; 1 4700-030 Braga</p>\r\n<p>Telef.: +351 253 617 604</p>\r\n<p>E-mail: <a href=\"mailto:geral@ciab.pt\">geral@ciab.pt</a></p>\r\n<p>Para mais informa&ccedil;&otilde;es, consulte portal do consumidor www.consumidor.gov.pt ou <a href=\"https://www.arbitragemdeconsumo.org\">www.arbitragemdeconsumo.org</a>&nbsp;</p>\r\n<hr>\r\n<p>Qualquer quest&atilde;o relativa a este conte&uacute;do, n&atilde;o hesite em contactar.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `nome_servico` varchar(500) NOT NULL,
  `imagem_home` longtext NOT NULL,
  `imagem_banner` longtext NOT NULL,
  `intro_home` varchar(1000) NOT NULL,
  `intro_banner` varchar(1000) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `subtitulo` varchar(500) NOT NULL,
  `texto` longtext NOT NULL,
  `categoria` varchar(500) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome_servico`, `imagem_home`, `imagem_banner`, `intro_home`, `intro_banner`, `titulo`, `subtitulo`, `texto`, `categoria`, `color`) VALUES
(1, 'Visita Virtual Personalizada', 'http://localhost/portfolio/Navdrone/uploads/visitas_360.png', 'http://localhost/portfolio/Navdrone/uploads/visitas_virtuais.png', 'Visita Virtual interativa, adaptável a qualquer tipo de negócio', 'Os seus potenciais clientes já podem entrar e conhecer virtualmente o seu espaço comercial.', 'Visita Virtual 360', 'Visita Virtual 360', '<div style=\"text-align: center;\">\r\n<h2>Um passo &agrave; frente para dar a conhecer o seu neg&oacute;cio</h2>\r\n<p>As Visitas Virtuais 360, aumentam a presen&ccedil;a das empresas nos motores de busca e&nbsp;<strong>convertem os usu&aacute;rios em clientes.</strong></p>\r\n<p>Quando um usu&aacute;rio conhece um estabelecimento comercial atrav&eacute;s deste recurso digital, ficar&aacute; motivado a deslocar-se at&eacute; ao local para o visitar presencialmente.</p>\r\n<p>As fotografias, nem sempre mostram a realidade de um espa&ccedil;o. Uma Visita Virtual 360, apresentar&aacute; melhor a dimens&atilde;o do seu neg&oacute;cio, com uma experi&ecirc;ncia interativa e imersiva. Al&eacute;m disso,&nbsp;podem incorporar: V&iacute;deos, Fotografias, M&uacute;sica, Links, entre outras informa&ccedil;&otilde;es relevantes.</p>\r\n<p>Cada empresa tem as suas pr&oacute;prias caracter&iacute;sticas, portanto as visitas virtuais 360, s&atilde;o&nbsp;<strong>planeadas e personalizadas</strong>&nbsp;de acordo com as necessidades e objetivos pretendidos.</p>\r\n<p>Com estas potencialidades, este servi&ccedil;o &eacute; a solu&ccedil;&atilde;o ideal para:&nbsp;<strong>Hot&eacute;is, Museus, Empresas, Lojas, Alojamentos Tur&iacute;sticos, Restaurantes, Cl&iacute;nicas</strong>, entre outros.</p>\r\n</div>\r\n<div style=\"text-align: center;\"><img style=\"float: left;\" src=\"http://localhost/portfolio/Navdrone/uploads/portrait-with-vr-glasses.jpg\" width=\"217\" height=\"290\">\r\n<p>Inclu&iacute;mos uma fun&ccedil;&atilde;o, que permite efetuar a visita com &oacute;culos de Realidade Virtual. Uma experi&ecirc;ncia imersiva que transporta virtualmente os usu&aacute;rios para dentro do local.</p>\r\n<p><em><span style=\"font-size: 18pt;\">&ldquo;A Criatividade &eacute; pensar coisas novas. A inova&ccedil;&atilde;o &eacute; fazer coisas novas\" &ndash; Theodore Levitt</span></em></p>\r\n</div>', 'visitas', '#b1e4fb'),
(2, 'Visitas Virtuais 3D Matterport', 'http://localhost/portfolio/Navdrone/uploads/matterport.png', 'http://localhost/portfolio/Navdrone/uploads/matterport.png', 'Visitas abertas 24h/dia. A solução ideal para o ramo imobiliário', 'A solução Ideal para o Rumo Imobiliário', 'Visitas Virtuais 3D', 'Visitas Virtuais 3D', '<div style=\"text-align: center;\">\r\n<h2>Como Funciona uma Visita Virtual Matterport?</h2>\r\n<div>\r\n<p>Assista ao v&iacute;deo para entender as potencialidades deste recurso digital.</p>\r\n</div>\r\n<iframe style=\"display: table; margin-left: auto; margin-right: auto;\" src=\"https://www.youtube.com/embed/UXfcjtl8gx8\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<div style=\"text-align: center;\">\r\n<h2>R&aacute;pida divulga&ccedil;&atilde;o de im&oacute;veis</h2>\r\n<p>As Visitas Virtuais 3D Matterport s&atilde;o a&nbsp;<strong>solu&ccedil;&atilde;o ideal para ag&ecirc;ncias imobili&aacute;rias.</strong></p>\r\n<p>Permite que um interessado visualize um im&oacute;vel inteiro em 3D e percorra as suas divis&otilde;es&nbsp;<strong>como se estivesse l&aacute;</strong>.</p>\r\n<p>Agendar visitas constantes aos im&oacute;veis, nem sempre &eacute; pr&aacute;tico e c&oacute;modo, principalmente quando ainda se encontram habitados pelos atuais propriet&aacute;rios.&nbsp;Uma Visita Virtual 3D Matterport &eacute; a&nbsp;<strong>solu&ccedil;&atilde;o digital para esse problema.</strong></p>\r\n<p>A divulga&ccedil;&atilde;o, &eacute; realizada&nbsp;por diversos meios, tais como: Sites, redes sociais, c&oacute;digo QR impresso, WhatsApp, SMS ou email.</p>\r\n<p>Os seus im&oacute;veis, ser&atilde;o visitados como nunca antes, em qualquer hora e qualquer lugar!</p>\r\n</div>\r\n<div><img style=\"float: left;\" src=\"http://localhost/portfolio/Navdrone/uploads/3D-multidevice.png\" width=\"600\" height=\"375\">\r\n<div style=\"text-align: center;\">\r\n<h2>F&aacute;cil Compartilhamento</h2>\r\n<p>A Visita Virtual 3D pode ser facilmente incorporada no seu Site e Redes Sociais. Tamb&eacute;m pode ser partilhada pelo WhatsApp, SMS ou E-mail.</p>\r\n</div>\r\n</div>', 'visitas', '#ff8781'),
(3, 'Visitas Virtuais Google Street View', 'http://localhost/portfolio/Navdrone/uploads/Google-Trusted-Tick.png', 'http://localhost/portfolio/Navdrone/uploads/google_street.png', 'Transporte os usuários para dentro da sua empresa', 'Uma Visita Virtual Google, possibilita a entrada dos visitantes no interior dos estabelecimentos comerciais, através do Google Maps e de outras plataformas Google.', 'Visitas Virtuais', 'Visitas Virtuais', '<div style=\"text-align: center;\">\r\n<h2>O seu Espa&ccedil;o Comercial dentro do Google Maps</h2>\r\n<p>Assista e este v&iacute;deo para entender melhor como funciona.</p>\r\n<iframe style=\"display: table; margin-left: auto; margin-right: auto;\" src=\"https://www.youtube.com/embed/9CLYaukFmMw\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<div style=\"text-align: center;\">\r\n<h2>Aumente a Visualiza&ccedil;&atilde;o do seu Espa&ccedil;o Comercial</h2>\r\n<p>A Visita Virtual Google Street View,&nbsp;<strong>aumenta o posicionamento de uma empresa no motor de busca e plataformas Google</strong>. Maior visualiza&ccedil;&atilde;o, &eacute; o primeiro passo para conseguir mais clientes.</p>\r\n<p>Quando um cliente faz uma pesquisa na aplica&ccedil;&atilde;o do Google Maps, por exemplo: &ldquo;<em>Restaurantes em Braga</em>&ldquo;, um fator que influ&ecirc;ncia o posicionamento dessa pesquisa, &eacute; a exist&ecirc;ncia de uma Visita Virtual na plataforma.</p>\r\n<p><strong>Quais s&atilde;o as Vantagens?</strong>&nbsp;O seu neg&oacute;cio ser&aacute; encontrado mais rapidamente e os usu&aacute;rios poder&atilde;o navegar imediatamente no interior do estabelecimento em 360&ordm;. Isso far&aacute; muita diferen&ccedil;a na hora de decidir que local o cliente ir&aacute; escolher.</p>\r\n<p>A Visita Virtual, fica&nbsp;<strong>associada ao nome da empresa,&nbsp;</strong>que &eacute; georreferenciada no Google Maps, sendo muito f&aacute;cil para o cliente iniciar a rota at&eacute; ao local</p>\r\n</div>', 'visitas', '#4fdfa8'),
(4, 'Produção Audiovisual e Multimédia Fotografia e Videografia Drone', 'http://localhost/portfolio/Navdrone/uploads/drone.png', 'http://localhost/portfolio/navdrone/uploads/foto_video_banner.png', 'A NavDrone captura momentos únicos do alto, transformando desafios em imagens que fazem a diferença', 'Uma Imagem vale mais do que mil palavras, e um Vídeo é composto de muitas Imagens!', 'Produção Audiovisual e Multimédia', 'Produção Audiovisual e Multimédia', '<div style=\"text-align: center;\">\r\n<h2 style=\"text-align: center; width: 100%\">Fotografia</h2>\r\n<img style=\"float: right;\" src=\"http://localhost/portfolio/navdrone/uploads/fotografia_hotel_1.webp\" alt=\"\" width=\"350\" height=\"233\">\r\n<div style=\"text-align: center;\">\r\n<p>Fotografias a&eacute;reas e voar com drones &eacute; uma paix&atilde;o da&nbsp;NavDrone.&nbsp;</p>\r\n<p>Gostamos de novos desafios e de fotografar imagens que marcam a diferen&ccedil;a.</p>\r\n<p>A vasta experi&ecirc;ncia em opera&ccedil;&otilde;es a&eacute;reas e o equipamento de &uacute;ltima gera&ccedil;&atilde;o, permite-nos voar nas mais variadas condi&ccedil;&otilde;es.</p>\r\n</div>\r\n</div>\r\n<div style=\"text-align: center;\">\r\n<div>\r\n<h2>V&iacute;deografia</h2>\r\n<p>A utiliza&ccedil;&atilde;o de v&iacute;deo como estrat&eacute;gia de marketing, ajuda o p&uacute;blico a compreender um grande volume de informa&ccedil;&otilde;es em pouco tempo.</p>\r\n<p>Os v&iacute;deos prendem a aten&ccedil;&atilde;o, e os usu&aacute;rios preferem aprender sobre os produtos ou servi&ccedil;os, atrav&eacute;s de videos curtos, em vez de ler informa&ccedil;&otilde;es por escrito.</p>\r\n<p>Quando a perspectiva a&eacute;rea &eacute; adicionada a um v&iacute;deo promocional, o resultado &eacute; mais impactante. A NavDrone possui vasta experi&ecirc;ncia em opera&ccedil;&otilde;es a&eacute;reas com drones, isso permite-nos voar mesmo nos cen&aacute;rios mais dif&iacute;ceis.</p>\r\n</div>\r\n<iframe style=\"width: 746px; height: 497px; display: table; margin-left: auto; margin-right: auto;\" src=\"https://www.youtube.com/embed/jzGrzWpWIJU?si=KcHUM0nH2BxUWgQo\" width=\"561\" height=\"374\" allowfullscreen=\"allowfullscreen\"></iframe>\r\n</div>\r\n<div>\r\n<h2>Edi&ccedil;&atilde;o Profissional</h2>\r\n<div>\r\n<div>\r\n<p>Depois de realizar as filmagens no local, inicia-se a fase de trabalho de Edi&ccedil;&atilde;o e P&oacute;s-Produ&ccedil;&atilde;o.</p>\r\n<p>Num mundo cada vez mais digital, onde muita informa&ccedil;&atilde;o &eacute; transmitida por V&iacute;deo ou Fotografia, este &eacute; um recurso fundamental para destacar a sua empresa, produto&nbsp;ou servi&ccedil;o.</p>\r\n<p>&Eacute; feita a sele&ccedil;&atilde;o e corte dos V&iacute;deos, tratamento de imagem, sincroniza&ccedil;&atilde;o de &aacute;udio e elementos gr&aacute;ficos.</p>\r\n</div>\r\n<img src=\"http://localhost/portfolio/navdrone/uploads/DaVinci-Resolve-Interface.png\" width=\"382\" height=\"221\">\r\n</div>\r\n</div>', 'producao', '#b4bec4'),
(5, 'Produção Audiovisual e Multimédia Adaptável', 'http://localhost/portfolio/Navdrone/uploads/gimbal_camera.png', 'http://localhost/portfolio/navdrone/uploads/adaptavel_banner.jpg', 'A NavDrone, possui experiência em diversas áreas, tais como: Construção, Indústria, Imobiliário, Turismo, Comércio, entre outras.', 'Porque cada projeto merece um grande plano!', 'Produção Audiovisual e Multimédia', 'Adaptável', '<div><img src=\"http://localhost/portfolio/navdrone/uploads/icon_1.png\">\r\n<div>\r\n<h2>Turismo</h2>\r\n<p>Criamos conte&uacute;dos visuais cativantes para promover destinos tur&iacute;sticos e experi&ecirc;ncias &uacute;nicas.</p>\r\n<p>Com imagens a&eacute;reas envolventes, mostramos a beleza de hot&eacute;is, casas de turismo e atra&ccedil;&otilde;es tur&iacute;sticas.</p>\r\n</div>\r\n</div>\r\n<div><img src=\"http://localhost/portfolio/navdrone/uploads/icon_2.png\">\r\n<div>\r\n<h2>Constru&ccedil;&atilde;o</h2>\r\n<p>Com drones de alta precis&atilde;o, capturamos imagens e v&iacute;deos a&eacute;reos para monitoramento de obras e inspe&ccedil;&atilde;o de estruturas.</p>\r\n<p>A nossa tecnologia permite um acompanhamento detalhado do progresso da constru&ccedil;&atilde;o, otimizando tempo e recursos.</p>\r\n</div>\r\n</div>\r\n<div><img src=\"http://localhost/portfolio/navdrone/uploads/icon_3.png\">\r\n<div>\r\n<h2>Com&eacute;rcio</h2>\r\n<p>Ajudamos empresas a destacar os seus produtos e servi&ccedil;os com v&iacute;deos promocionais de alto impacto ou visitas virtuais.</p>\r\n<p>O nosso trabalho fortalece a identidade visual das empresas, aumentando a visibilidade e atra&ccedil;&atilde;o de clientes.</p>\r\n</div>\r\n</div>\r\n<div><img src=\"http://localhost/portfolio/navdrone/uploads/icon_4.png\">\r\n<div>\r\n<h2>Imobili&aacute;rio</h2>\r\n<p>Produzimos v&iacute;deos e imagens a&eacute;reas de alta qualidade para valorizar im&oacute;veis e atrair compradores.</p>\r\n<p>O nosso conte&uacute;do multim&eacute;dia permite mostrar empreendimentos de forma inovadora e impactante.</p>\r\n</div>\r\n</div>', 'producao', '#f5ef58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `video` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `video`) VALUES
(1, 'https://www.youtube.com/embed/fp6Dk6r97SQ?si=G2AWqS0aXTEmOlCG'),
(2, 'https://www.youtube.com/embed/qPHfoqXsyUw?si=x9Fwj7doe8Uge0ZT'),
(3, 'https://www.youtube.com/embed/ZAgV-aZEJ9k?si=LMhy_Xok9j25PITe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitas_virtuais_360`
--

CREATE TABLE `visitas_virtuais_360` (
  `id` int(11) NOT NULL,
  `imagem` longtext NOT NULL,
  `link` varchar(500) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `legenda` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `visitas_virtuais_360`
--

INSERT INTO `visitas_virtuais_360` (`id`, `imagem`, `link`, `titulo`, `legenda`) VALUES
(1, 'https://www.navdrone.pt/wp-content/uploads/cache/2019/12/Hotel-bracara/45472311.jpg', 'https://www.navdrone.pt/hotel/bracaraaugusta/', 'Hotel', 'Hotel Bracara Augusta | Braga'),
(2, 'https://www.navdrone.pt/wp-content/uploads/cache/2019/12/ergovisao_viseu/3062687270.jpg', 'https://www.navdrone.pt/ergovisao/viseuherculano/', 'Loja Ótica', 'Ergovisão | Viseu'),
(3, 'https://www.navdrone.pt/wp-content/uploads/cache/2019/12/sams/2963758628.jpg', 'https://www.navdrone.pt/sams/porto/', 'Loja Ótica', 'SamsQuadros | Porto'),
(4, 'https://www.navdrone.pt/wp-content/uploads/cache/2019/12/AL-helianthus/2013986327.jpg', 'https://www.navdrone.pt/bestvillas/collectionhelianthus/', 'Alojamento Local\r\n', 'Apartamento T1 | Braga'),
(5, 'https://www.navdrone.pt/wp-content/uploads/cache/2019/12/umalantigo/4006838817.jpg', 'https://www.navdrone.pt/vt360/umalantigo/', 'Café/Restaurante', 'Umalantigo | Amares'),
(6, 'https://www.navdrone.pt/wp-content/uploads/cache/2019/12/qt_planet/1951144972.jpg', 'https://www.navdrone.pt/360/quintadatimpeira/', 'Turismo Rural', 'Quinta da Trimpeira | Lamego');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `backoffice`
--
ALTER TABLE `backoffice`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fotografias`
--
ALTER TABLE `fotografias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `politica`
--
ALTER TABLE `politica`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `visitas_virtuais_360`
--
ALTER TABLE `visitas_virtuais_360`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `backoffice`
--
ALTER TABLE `backoffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `fotografias`
--
ALTER TABLE `fotografias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `politica`
--
ALTER TABLE `politica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `visitas_virtuais_360`
--
ALTER TABLE `visitas_virtuais_360`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
