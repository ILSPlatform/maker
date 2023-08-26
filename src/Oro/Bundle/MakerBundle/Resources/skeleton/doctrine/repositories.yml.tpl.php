services:
<?php foreach ($repositories as $repository): ?>

    <?= $repository['repofullname'] ?>:
        parent: oro_entity.abstract_repository
        arguments:
            - '<?= $repository['entityfqcn']; ?>'
        #tags:
        #    - { name: doctrine.repository_service }
<?php endforeach; ?>