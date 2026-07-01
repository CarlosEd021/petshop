package psaf.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import psaf.entity.Agendamento;

public interface AgendamentoRepository extends JpaRepository<Agendamento, Long> {
}