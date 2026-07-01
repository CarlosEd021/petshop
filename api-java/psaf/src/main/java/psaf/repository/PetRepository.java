package psaf.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import psaf.entity.Pet;

public interface PetRepository extends JpaRepository<Pet, Long> {
}