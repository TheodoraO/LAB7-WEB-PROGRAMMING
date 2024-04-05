
document.addEventListener('DOMContentLoaded', () => {
    const allProjects = document.querySelectorAll('.project');
    document.querySelectorAll('.filter-button').forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');
            allProjects.forEach(project => {
                project.style.display = project.getAttribute('data-category') === category ? 'block' : 'none';
            });
        });
    });
});
