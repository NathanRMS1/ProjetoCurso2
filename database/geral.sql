CREATE DATABASE princesinha DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
USE princesinha;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `senha` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nivel` int(11),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `mensagem` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
CREATE TABLE `comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idProduto` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `comentario` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `nivel`) VALUE
(1, 'Ariosvaldo da Silva Neves de Oliveira Pereira Barros do Nascimento Gomes da Silva Sauro', 'ari@osvaldo.com', '4r105v4ld0', 1);
COMMIT;
