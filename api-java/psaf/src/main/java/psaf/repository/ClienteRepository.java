package psaf.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import psaf.entity.Cliente;

public interface ClienteRepository extends JpaRepository<Cliente, Long> {
}