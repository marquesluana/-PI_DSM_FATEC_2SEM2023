DELIMITER //

CREATE PROCEDURE BuscarPrestadoresPorNome(
    IN p_nome VARCHAR(30)
)
BEGIN
    SELECT nome, data_nasc, sexo, email, categoria, cidade, estado, celular FROM usuario
    WHERE tipo_usuario = 'Prestador' AND nome LIKE CONCAT('%', p_nome, '%');
END //

DELIMITER ;

CALL BuscarPrestadoresPorNome('NomePrestador');
