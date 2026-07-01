package psaf.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import psaf.entity.Produto;
import psaf.service.ProdutoService;

@RestController
@RequestMapping("/api/produtos")
@CrossOrigin("*")
public class ProdutoController {

    @Autowired
    private ProdutoService service;

    @GetMapping
    public List<Produto> listar() {
        return service.listar();
    }

    @GetMapping("/{id}")
    public Produto buscar(@PathVariable Long id) {
        return service.buscar(id);
    }

    @PostMapping
    public Produto salvar(@RequestBody Produto produto) {
        return service.salvar(produto);
    }

    @PutMapping("/{id}")
    public Produto atualizar(@PathVariable Long id,
                             @RequestBody Produto produto) {

        produto.setId(id);

        return service.salvar(produto);
    }

    @DeleteMapping("/{id}")
    public void excluir(@PathVariable Long id) {

        service.excluir(id);

    }

}