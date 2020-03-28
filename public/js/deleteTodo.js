
//grab button by class name
let deleteButtons = document.getElementsByClassName('btn-delete');


//returns a html collection of buttons so foreach loop through buttons to add event listener
Array.from(deleteButtons).forEach((button) => {
    button.addEventListener('click', (e) => {
        let id = e.target.dataset.id;
        let todo = e.target.dataset.todo;
        fetch('/todos', {
            method: 'DELETE',
            body: JSON.stringify({"id": id}),
            headers: {
                "Content-Type": "application/json"
            }
        });
        alert('You deleted: ' + todo);
        window.location.href = "http://localhost:8080/todos";
    })
});