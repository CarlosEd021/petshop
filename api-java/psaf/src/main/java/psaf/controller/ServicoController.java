package psaf.controller;

import org.springframework.web.bind.annotation.*;
import psaf.entity.Servico;
import psaf.repository.ServicoRepository;

import java.util.List;

@RestController
@RequestMapping("/api/servicos")
@CrossOrigin("*")
public class ServicoController {

    private final ServicoRepository repository;

    public ServicoController(ServicoRepository repository) {
        this.repository = repository;
    }

    @GetMapping
    public List<Servico> listar() {
        return repository.findAll();
    }

    @GetMapping("/{id}")
    public Servico buscar(@PathVariable Long id) {
        return repository.findById(id).orElse(null);
    }

    @PostMapping
    public Servico salvar(@RequestBody Servico servico) {
        return repository.save(servico);
    }

    @PutMapping("/{id}")
    public Servico atualizar(@PathVariable Long id,
                             @RequestBody Servico servico) {

        servico.setId(id);

        return repository.save(servico);

    }

    @DeleteMapping("/{id}")
    public void excluir(@PathVariable Long id) {

        repository.deleteById(id);

    }

}