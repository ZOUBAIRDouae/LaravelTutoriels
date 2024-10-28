<form method="POST" action="<?php echo e(route('contact.store')); ?>">
    <?php echo csrf_field(); ?>
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea name="message" id="message" required></textarea>
    </div>
    <button type="submit">Envoyer</button>
    
</form><?php /**PATH C:\Users\Solicode\Tuto1\resources\views/emails/contact.blade.php ENDPATH**/ ?>