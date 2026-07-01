package psaf.service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import psaf.entity.Produto;
import psaf.repository.ProdutoRepository;

@Service
public class ProdutoService {

    @Autowired
    private ProdutoRepository repository;

    public List<Produto> listar() {
        return repository.findAll();
    }

    public Produto buscar(Long id) {
        return repository.findById(id).orElse(null);
    }

    public Produto salvar(Produto produto) {
        return repository.save(produto);
    }

    public void excluir(Long id) {
        repository.deleteById(id);
    }

}