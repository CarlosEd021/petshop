package psaf.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import psaf.entity.Produto;

public interface ProdutoRepository
        extends JpaRepository<Produto, Long> {
}