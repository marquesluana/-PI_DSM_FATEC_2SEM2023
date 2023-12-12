/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `hcc_database` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `hcc_database`;

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agendamento` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_prestador` int(11) DEFAULT NULL,
  `fk_id_paciente` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `periodo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_agendamento`),
  KEY `fk_id_prestador` (`fk_id_prestador`),
  KEY `fk_id_paciente` (`fk_id_paciente`),
  CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`fk_id_prestador`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE,
  CONSTRAINT `agenda_ibfk_2` FOREIGN KEY (`fk_id_paciente`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS `avaliacao` (
  `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT,
  `id_avaliador` int(11) DEFAULT NULL,
  `id_avaliado` int(11) DEFAULT NULL,
  `nota` float DEFAULT NULL,
  `comentario` varchar(240) DEFAULT NULL,
  PRIMARY KEY (`id_avaliacao`),
  KEY `id_avaliador` (`id_avaliador`),
  KEY `id_avaliado` (`id_avaliado`),
  CONSTRAINT `avaliacao_ibfk_1` FOREIGN KEY (`id_avaliador`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE,
  CONSTRAINT `avaliacao_ibfk_2` FOREIGN KEY (`id_avaliado`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `BuscarPrestadoresPorCidade`(
    IN p_cidade VARCHAR(60)
)
BEGIN
    SELECT nome, data_nasc, sexo, email, categoria, cidade, estado, celular FROM usuario
    WHERE tipo_usuario = 'Prestador' AND cidade = p_cidade;
END//
DELIMITER ;

DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `BuscarPrestadoresPorNome`(
    IN p_nome VARCHAR(30)
)
BEGIN
    SELECT nome, data_nasc, sexo, email, categoria, cidade, estado, celular FROM usuario
    WHERE tipo_usuario = 'Prestador' AND nome LIKE CONCAT('%', p_nome, '%');
END//
DELIMITER ;

DELIMITER //
CREATE DEFINER=`root`@`localhost` FUNCTION `CalcularMediaAvaliacoesUsuario`(p_id_usuario INT
) RETURNS float
BEGIN
    DECLARE total_notas FLOAT;
    DECLARE quantidade_notas INT;

    -- Calcula a média das notas para o avaliado
    SELECT COALESCE(SUM(nota), 0), COALESCE(COUNT(*), 1) INTO total_notas, quantidade_notas
    FROM avaliacao
    WHERE id_avaliado = p_id_usuario;

    -- Calcula a média, garantindo que esteja no intervalo de 0 a 10
    RETURN CASE
        WHEN quantidade_notas > 0 THEN LEAST(GREATEST(total_notas / quantidade_notas, 0), 10)
        ELSE 0
    END;
END//
DELIMITER ;

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data_nasc` date NOT NULL,
  `sexo` enum('Masculino','Feminino') NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `tipo_usuario` enum('Paciente','Prestador','Administrador') NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `celular` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuario` (`id_usuario`, `nome`, `cpf`, `data_nasc`, `sexo`, `email`, `senha`, `tipo_usuario`, `categoria`, `cidade`, `estado`, `celular`, `foto`) VALUES
	(1, 'Igor Ferreira', '11111111111', '2003-10-02', 'Masculino', 'igor@email.com', 'igor123', 'Prestador', 'Geral', 'Leme', 'São Paulo', 111111111, NULL),
	(2, 'Luana Marques', '22222222222', '2000-02-02', 'Feminino', 'luana@email.com', 'luana123', 'Prestador', 'Geral', 'Araras', 'São Paulo', 222222222, NULL),
	(3, 'Eduardo Henrique', '33333333333', '2005-03-03', 'Masculino', 'eduardo@email.com', 'eduardo123', 'Paciente', 'Idoso', 'Leme', 'São Paulo', 111223344, NULL),
	(4, 'Maikon Gino', '44444444444', '1990-04-04', 'Masculino', 'maikon@email.com', 'maikon123', 'Prestador', 'Idoso', 'Araras', 'São Paulo', 998877665, NULL),
	(5, 'Eryck Lino', '55555555555', '1994-05-05', 'Masculino', 'eryck@email.com', 'eryck-123', 'Paciente', 'Idoso', 'Araras', 'São Paulo', 554433221, NULL),
	(6, 'Marcos Maneo', '66666666666', '1995-06-06', 'Masculino', 'marcos@email.com', 'marcos_123', 'Paciente', 'Idoso', 'Limeira', 'São Paulo', 112233445, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
