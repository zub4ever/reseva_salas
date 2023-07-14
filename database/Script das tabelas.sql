
CREATE TABLE reserva_sala (
		id serial PRIMARY key,				
		nm_sala VARCHAR(300) null,
		
	    created_at TIMESTAMP (0),
        updated_at TIMESTAMP (0)
);
CREATE TABLE reserva_motivo (
		id serial PRIMARY key,				
		nm_motivo VARCHAR(300) null,
		
	    created_at TIMESTAMP (0),
        updated_at TIMESTAMP (0)
);


CREATE TABLE reservas (
		id serial PRIMARY key,

		data_hora_inicio timestamp null,
		
		data_hora_fim timestamp null,
		
		descricao_pedido text null,
		
		reserva_sala_id integer not null,
		reserva_motivo_id integer not null,
		users_id integer not null,
		
		
		FOREIGN KEY (users_id)
	    REFERENCES users (id),
		
		FOREIGN KEY (reserva_motivo_id)
	    REFERENCES reserva_motivo (id),
		
		FOREIGN KEY (reserva_sala_id)
	    REFERENCES reserva_sala (id),
		
		 status bool NOT NULL DEFAULT true,
	    created_at TIMESTAMP (0),
        updated_at TIMESTAMP (0)
);