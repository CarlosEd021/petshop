package psaf.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import psaf.entity.Servico;

public interface ServicoRepository extends JpaRepository<Servico, Long> {
}