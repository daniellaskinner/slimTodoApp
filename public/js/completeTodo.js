//grab button by class name
let completeButtons = document.querySelectorAll('.btn-complete');

//returns an array/nodelist so foreach loop through buttons to add event listener
completeButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
        let id = e.target.dataset.id;
        fetch('/todos/complete', {
            method: 'PUT',
            body: JSON.stringify({"id": id}),
            headers: {
                "Content-Type": "application/json"
            }
        });
        window.location.href = "http://localhost:8080/todos";
    })
});