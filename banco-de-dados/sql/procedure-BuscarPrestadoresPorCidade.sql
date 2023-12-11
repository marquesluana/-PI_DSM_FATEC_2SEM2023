DELIMITER //

CREATE PROCEDURE BuscarPrestadoresPorCidade(
    IN p_cidade VARCHAR(60)
)
BEGIN
    SELECT nome, data_nasc, sexo, email, categoria, cidade, estado, celular FROM usuario
    WHERE tipo_usuario = 'Prestador' AND cidade = p_cidade;
END //

DELIMITER ;



CALL BuscarPrestadoresPorCidade('NomeDaCidade');


