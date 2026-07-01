package psaf.controller;

import org.springframework.web.bind.annotation.*;
import psaf.entity.Agendamento;
import psaf.repository.AgendamentoRepository;

import java.util.List;

@RestController
@RequestMapping("/api/agendamentos")
@CrossOrigin("*")
public class AgendamentoController {

    private final AgendamentoRepository repository;

    public AgendamentoController(AgendamentoRepository repository) {
        this.repository = repository;
    }

    @GetMapping
    public List<Agendamento> listar() {
        return repository.findAll();
    }

    @GetMapping("/{id}")
    public Agendamento buscar(@PathVariable Long id) {
        return repository.findById(id).orElse(null);
    }

    @PostMapping
    public Agendamento salvar(@RequestBody Agendamento agendamento) {
        return repository.save(agendamento);
    }

    @PutMapping("/{id}")
    public Agendamento atualizar(@PathVariable Long id,
                                 @RequestBody Agendamento agendamento) {

        agendamento.setId(id);

        return repository.save(agendamento);
    }

    @DeleteMapping("/{id}")
    public void excluir(@PathVariable Long id) {

        repository.deleteById(id);

    }

}