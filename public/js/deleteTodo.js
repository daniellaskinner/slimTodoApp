// document.getElementById(deleteTodo)

document.getElementById('test').addEventListener("click", ()=> {
    fetch('/todos', {
        method: 'DELETE',
        body: JSON.stringify({"id":"11"}),
        headers: {
            "Content-Type": "application/json"
        }
    })
})

