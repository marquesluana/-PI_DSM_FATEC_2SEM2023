DELIMITER //

CREATE FUNCTION CalcularMediaAvaliacoesUsuario(
    p_id_usuario INT
) RETURNS FLOAT
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
END //

DELIMITER ;

SELECT CalcularMediaAvaliacoesUsuario(id_do_usuario);

