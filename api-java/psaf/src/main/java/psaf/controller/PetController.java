package psaf.controller;

import org.springframework.web.bind.annotation.*;
import psaf.entity.Pet;
import psaf.repository.PetRepository;

import java.util.List;

@RestController
@RequestMapping("/api/pets")
@CrossOrigin("*")
public class PetController {

    private final PetRepository repository;

    public PetController(PetRepository repository) {
        this.repository = repository;
    }

    @GetMapping
    public List<Pet> listar() {
        return repository.findAll();
    }

    @GetMapping("/{id}")
    public Pet buscar(@PathVariable Long id) {
        return repository.findById(id).orElse(null);
    }

    @PostMapping
    public Pet salvar(@RequestBody Pet pet) {
        return repository.save(pet);
    }

    @PutMapping("/{id}")
    public Pet atualizar(@PathVariable Long id, @RequestBody Pet pet) {

        pet.setId(id);

        return repository.save(pet);
    }

    @DeleteMapping("/{id}")
    public void excluir(@PathVariable Long id) {

        repository.deleteById(id);

    }

}