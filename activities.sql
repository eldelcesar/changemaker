-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 04-10-2015 a las 00:42:37
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `changemakerday`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `main_person` varchar(100) COLLATE utf8_bin NOT NULL,
  `scenario_id` int(11) NOT NULL,
  `time` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` varchar(100) COLLATE utf8_bin NOT NULL,
  `register` varchar(100) COLLATE utf8_bin NOT NULL,
  `background` varchar(100) COLLATE utf8_bin NOT NULL,
  `organizer` varchar(100) COLLATE utf8_bin NOT NULL,
  `logo` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `scenario` varchar(100) COLLATE utf8_bin NOT NULL,
  `url_fb` varchar(100) COLLATE utf8_bin NOT NULL,
  `date_id` int(11) NOT NULL,
  `isRegister` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `activities`
--

INSERT INTO `activities` (`id`, `name`, `main_person`, `scenario_id`, `time`, `date`, `register`, `background`, `organizer`, `logo`, `description`, `scenario`, `url_fb`, `date_id`, `isRegister`) VALUES
(1, 'La Hora de la Siesta', 'Carolina Platt', 1, '13:00 - 14:40', '14 Octubre', '', 'default.jpg', 'Central de Cambio', 'ficg.jpg', 'Atravesamos los mares del recuerdo y la ausencia para contar las historias de Emilia y Yeyé, dos de los 49 niños que perdieron la vida en la Guardería ABC, en un incendio que pudo ser evitado y que mostró las terribles consecuencias de la corrupción y el tráfico de influencias que rodean al sistema de guarderías subrogadas por el gobierno en México. “La hora de la Siesta” es una elegía visual a la memoria de estos niños y a la valiente lucha de sus familias por retomar la vida', 'Sala de Cine de Residencias', 'https://www.facebook.com/La-Hora-de-la-Siesta-Documental-221971484494437/timeline/', 1, 0),
(2, 'Sesión con realizadores: La Hora de la Siesta', 'Carolina Platt', 1, '16:00 - 17:50', '14 de Octubre', '', 'default.jpg', 'Central de Cambio', 'ficg.jpg', 'Experiencia interactiva con los realizadores del documental, en el que el espectador podrá expresar su sentir acerca del largometraje.', 'Sala de cine de residencias', 'https://www.facebook.com/La-Hora-de-la-Siesta-Documental-221971484494437/timeline/', 1, 0),
(3, 'Ayiti Toma "El País que es de nosotros"', 'Joseph Hillel', 1, '18:00 - 17-40', '14 Octubre', '', 'default.jpg', 'Central de Cambio', 'ficg.jpg', 'Más allá de Haití —conocido por sus desastres naturales y la debacle humanitaria— está Ayiti Toma, "el país que es de nosotros". Este documental ofrece una amplia y singular mirada al país aparentemente conocido: presenta a Ayiti Toma a través de los propios haitianos, incluyendo políticos, intelectuales, practicantes de vudú y jóvenes de colonias peligrosas; además ofrece el punto de vista de antropólogos, historiadores y ayudantes voluntarios, incluyendo el actor Sean Penn. El testimonio de todos ellos coloca a la vibrante cultura haitiana como la clave para el futuro del país. Si es que Haití aún puede convertirse en Ayiti Toma.', 'Sala de cine de residencias', 'https://www.facebook.com/ayititomafilm', 1, 0),
(4, 'Inauguración', 'Ashoka México', 1, '9:00 - 9:30', '15 Octubre', '', 'default.jpg', 'Ashoka México y Centroamerica', 'ashoka.jpg', '', 'Green', 'https://www.facebook.com/AshokaMX?fref=ts', 2, 0),
(5, 'Conferencia Inaugural', 'Ashoka México', 1, '9:30 - 10:30', '15 Octubre', '', 'default.jpg', 'Ashoka México y Centroamerica', 'ashoka.jpg', '', 'Green', 'https://www.facebook.com/AshokaMX?fref=ts', 2, 0),
(6, 'Corto documental: Orgánico', 'Juan Pablo Rojas', 3, '10:50 - 11:00', '15 Octubre', '', 'default.jpg', 'Sarape Social', 'sarape.png', 'Dos familias, una en el campo y otra en la ciudad. Ambas producen y consumen alimentos orgánicos; el interés por alimentarse sanamente los ha acercado y en conjunto trabajan en un modelo que promueve el comercio justo, la producción de alimentos de manera ecológica y un manejo de los residuos amigable con la naturaleza, transformando así los desechos en valiosos nutrientes. A través de su historia el cortometraje reflexiona sobre la relación entre nuestros consumos y nuestros desechos.', 'Green', 'http://sarapefilms.com', 2, 0),
(7, 'Panel: El Campo y la Ciudad', 'Juan Pablo Rojas', 3, '11:00 - 11:30', '15 Octubre', '', 'default.jpg', 'Sarape Social', 'sarape.png', '', 'Green', 'http://sarapefilms.com', 2, 0),
(8, 'Ariel', 'Laura Bari', 1, '11:30 - 13:05', '15 Octubre', '', 'default.jpg', 'Central de Cambio', 'ficg.jpg', 'Ariel es un hombre atormentado por la memoria de sus piernas, que perdió en un accidente mecánico cuando tenía 33 años. Está obsesionado con la misión de diseñar y construir sus propias prótesis y, así, volver a caminar. Laura Bari, hermana de Ariel, filmó la lucha y la transformación del hombre a lo largo de 10 años. El cine directo se encuentra con la poesía, la narrativa y la música, y una historia metafórica emerge: un destino oscuro redimido por la genialidad de la imaginación.', 'Sala de cine de residencias', '', 2, 0),
(9, 'Taller: Biodiversidad, cultura y alimentación', 'Victor Flores', 3, '12:00 - 13:00', '15 Octubre', '', 'default.jpg', 'Ecotlán', '', '', '', '', 2, 0),
(10, 'Changemaker Talks: Techo', 'Techo', 1, '12:00 - 13:00', '15 Octubre', '', 'default.jpg', 'Techo', 'techo.png', 'TECHO es una organización presente en Latinoamérica y El Caribe que busca superar la situación de pobreza que viven miles de personas en los asentamientos precarios, a través de la acción conjunta de sus pobladores y jóvenes voluntarios. TECHO tiene la convicción de que la pobreza se puede superar definitivamente si la sociedad en su conjunto logra reconocer que éste es un problema prioritario y trabaja activamente por resolverlo.', 'People', 'https://www.facebook.com/TECHOmexico', 2, 0),
(11, 'Rompiendo el ciclo de la pobreza', 'Susan Pick', 1, '13:30 - 14:20', '15 Octubre', '', 'default.jpg', 'Yo quiero yo puedo', 'yoquiero.jpg', 'Fundadora y presidenta del Instituto Mexicano de Investigación de Familia Y Población A.C. (IMIFAP), organización que desarrolla los programas Yo quiero yo puedo que brindan estrategias de desarrollo humano para lograr una ciudadanía participativa capaz de fortalecer su salud, educación y productividad. Susan es una reconocida psicóloga e investigadora que con su trayectoria ha creado lazos solidos con organismos gubernamentales y organismos de la sociedad civil logrando expandir sus programas en 14 países y alcanzando 19 millones de personas.Reconocida como fellow dentro de la red de emprendedores de Ashoka por el impacto de su trabajo, que como objetivo último busca que todos los participantes de los programas hagan propia la mentalidad de agente de cambio y tomen responsabilidad para generar acciones que impacten positivamente a su entorno. ', 'People', 'https://www.facebook.com/YoquieroYopuedo.IMIFAP?fref=ts', 2, 0),
(12, 'Película: Who cares?', 'Mara Mourão', 1, '14:30 - 16:10', '15 Octubre', '', 'default.jpg', 'Central de Cambio', 'ficg.jpg', '“Who Cares?” Lleva consigo un poderoso mensaje: Todos podemos ser agentes de cambios, no importa nuestras habilidades o lugares de origen, solo tienes que iniciar con una visión de transformación para la sociedad, transformación que mejore la manera en la que viven otros. Con sus 93 minutos “Who cares?” se desarrolla en siete países: Estados Unidos, Canada, Brazil, Peru, Tanzania, Suiza y Alemania. La producción grabo en 20 locaciones en solo 40 días, para poder encajar en la agenda de todos emprendedores sociales que parecen en la película.', 'Sala de cine de residencias', 'https://www.facebook.com/whocaresthefilm', 2, 0),
(13, 'Changemaker Talks: Wikipolitica', 'Wikipolitica', 1, '14:45 - 15:20', '15 Octubre', '', 'default.jpg', 'Wikipolitica', 'wiki.png', 'Son una red de personas sin filiaciones partidistas que buscan involucrarse e involucrar a más personas en la toma de decisiones públicas utilizando la tecnología, favoreciendo la participación local y reconociendo como principios generales la construcción colectiva, la democracia real y el respeto a los derechos humanos. Creen que la política debe ser más accesible, sencilla y útil para las personas en la resolución de los problemas del día a día. Para ellos reinventar la política significa mejorar las instituciones, tender puentes entre los políticos y los ciudadanos y dejar claro algo elemental: que el trabajo consiste en aportar, no obtener.', 'People', 'https://www.facebook.com/WikipoliticaJalisco?fref=nf', 2, 0),
(14, 'Terminando con el ciclo de la violencia en México', 'Saskia Niño de Rivera', 1, '15:30 - 16:20', '15 Octubre', '', 'default.jpg', 'Reinserta un Méxicano', 'reinserta.png', 'Saskia Niño de Rivera es la directora y fundadora de Reinserta un mexicano A.C. una organización que busca mejorar la situación de seguridad en México trabajando con proyectos de reinserción y prevención del delito en comunidades vulnerables (niños, mujeres y adolescentes). Sakia está convencida de que es posible disminuir la reincidencia de crímenes acercando a los jóvenes con oportunidades que les permitan conocer nuevas alternativas de vida y transformarse  en agentes de cambio para sus comunidades. A sus 28 años con su compromiso y pasión hacia su objetivo, Saskia ha logrado integrarse como fellow dentro la red de emprendedores sociales Ashoka y más recientemente ha sido nombrada por la revista TIME como “next generation leader”, un grupo de 6 emprendedores e innovadores sociales que con su ejemplo están liderando e inspirando el cambio a  nivel global.', 'People', 'https://www.facebook.com/REINSERTA', 2, 0),
(15, 'Panel: Civic Hacking 101', 'Codeando México + Juan del Cerro', 2, '17:00 - 16:00', '15 Octubre', '', 'default.jpg', 'Codeando México + Socialab', 'codeando.png', '“Un hacker es aquel que disfruta el reto intelectual de creativamente resolver problemas complejos y eludir las limitaciones de los sistemas y así extender sus capacidades.” En el panel los integrantes de Codeando México colocan su punto de vista sobre el Hacking cívico dejando posibilidades para resolver problemas complejos de las sociedad por medio de las vías ciudadanas y la tecnología.', 'People', 'https://www.facebook.com/CodeandoMexico?fref=ts', 1, 0),
(16, 'The true cost', 'Andrew Morgan', 3, '17:30 - 19:00', '15 Octubre', '', 'default.jpg', 'Central de Cambio', 'ficg.jpg', 'Su historia es una historia acerca de la vestimenta. Es sobre la ropa que usamos, las personas que la fabrican y el impacto que tiene la industria en nuestro mundo. El precio de la ropa ha ido decreciendo desde hace décadas mientras que los costos humanos y medioambientales han crecido dramáticamente. "The True Cost" es un documental innovador que abre la cortina de la historia no contada y que nos hace preguntarnos: ¿Quién realmente paga el precio por nuestra ropa? Filmada en diferentes países alrededor del mundo, desde las pasarelas más brillantes hasta los barrios más oscuros, con entrevistas con los influenciadores más importantes del mundo incluyendo a Stella McCartney, Livia Firth y Vandana Shiva. "The True Cost" es un proyecto sin precedentes que nos invita a un viaje alrededor del mundo que nos abrirá los ojos ante la vida de las personas y lugares detrás de nuestra ropa.', 'Sala de cine de residencias', 'https://www.facebook.com/The-True-Cost-2015-film-107514159590197/timeline/', 2, 0),
(17, 'What''s Social Valley?', 'Social Valley', 1, '19:00 - 20:00', '15 Octubre', '', 'default.jpg', 'Social Valley', 'socialvalley.png', 'Social Valley es la comunidad de Emprendimiento e Innovación Social de la Zona Metropolitana de Guadalajara. El tercer jueves de cada mes, la comunidad se reúne para compartir experiencias, debatir desafíos y encontrar oportunidades. El evento es compuesto por charlas temáticas, ''pitches'' de innovadores sociales y networking. Son bienvenidos: emprendedores e innovadores sociales, asociaciones, colectivos, activistas, incubadoras, aceleradoras, inversionistas, corporativos, profesionistas, freelancers, hackers, estudiantes, maestros, investigadores, y curiosos en general.', 'People', 'https://www.facebook.com/SocialValleyMx', 2, 0),
(18, 'Fuck up Night · Noches de fracaso', 'Susan Pick, Saskia Niño de Rivera, Ernesto del Carmen y Alonso Vargas', 1, '20:00 - 21:00', '15 Octubre', '', 'default.jpg', 'Fuck Up Night GDL', 'fuckup.jpg', 'Conversaciones sobre fracasos y otras cosas :) http://fuckupnights.com/', 'People', 'https://www.facebook.com/funguadalajara', 2, 0),
(19, 'Social Hack', 'ACM Tec Campus Guadalajara', 2, '1:00-23:00 y 8:00-17:30', '10 y 11 Octubre', 'https://docs.google.com/forms/d/1nMqvBLm1tLr-1nAZ9sZ57URsnJ5qssKb_Zdpom3NxQU/viewform', 'default.jpg', 'Diego Toledo, Enrique Enciso, Hugo Michel, Fernanda López y Daniel Jiménez', 'acm.svg', 'El principal enfoque de este Hackathon es el emprendimiento social tecnológico, en el que se logren soluciones de impacto en diferentes sectores de la población.', 'Biblioteca', 'https://www.facebook.com/acm.tecgdl?fref=ts', -1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;