package psaf.controller;

import org.springframework.web.bind.annotation.*;
import psaf.entity.Cliente;
import psaf.repository.ClienteRepository;

import java.util.List;

@RestController
@RequestMapping("/api/clientes")
@CrossOrigin("*")
public class ClienteController {

    private final ClienteRepository repository;

    public ClienteController(ClienteRepository repository) {
        this.repository = repository;
    }

    @GetMapping
    public List<Cliente> listar() {
        return repository.findAll();
    }

    @GetMapping("/{id}")
    public Cliente buscar(@PathVariable Long id) {
        return repository.findById(id).orElse(null);
    }

    @PostMapping
    public Cliente salvar(@RequestBody Cliente cliente) {
        return repository.save(cliente);
    }

    @PutMapping("/{id}")
    public Cliente atualizar(@PathVariable Long id,
                             @RequestBody Cliente cliente) {

        cliente.setId(id);

        return repository.save(cliente);
    }

    @DeleteMapping("/{id}")
    public void excluir(@PathVariable Long id) {

        repository.deleteById(id);

    }

}