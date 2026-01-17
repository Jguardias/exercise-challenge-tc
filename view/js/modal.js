document.addEventListener('DOMContentLoaded', () => {
  
    const modal = document.getElementById('modalCreateProduct');
    const btnOpen = document.getElementById('btnOpenCreateProduct');
    const btnCancel = document.getElementById('btnCancelModal');
    const btnCloseIcon = document.getElementById('btnCloseModalIcon');

   
    const openModal = () => {
        if (modal) {
            modal.classList.add('is-open');
            document.body.style.overflow = 'hidden'; 
        }
    };

   
    const closeModal = () => {
        if (modal) {
            modal.classList.remove('is-open');
            document.body.style.overflow = 'auto'; 
        }
    };

    
    if (btnOpen) {
        btnOpen.addEventListener('click', openModal);
    }

    if (btnCancel) {
        btnCancel.addEventListener('click', closeModal);
    }

    if (btnCloseIcon) {
        btnCloseIcon.addEventListener('click', closeModal);
    }

    
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });

    
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && modal.classList.contains('is-open')) {
            closeModal();
        }
    });
});