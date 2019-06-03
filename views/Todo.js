
class Todo

 {

  constructor()

  {

  }

  doGetAllTask (data)
  {

      const select = document.querySelector('.mCover');

      const url = './models/Todo.php?userItem=item';

          const xhr = new XMLHttpRequest();

          xhr.open('GET', url, true);

          xhr.onreadystatechange = function () {

            if (xhr.readyState == 4 && xhr.status == 200) {

                let makeup = xhr.responseText;

                 select.insertAdjacentHTML('beforeend',makeup);

            }else if (xhr.readyState == 2) {

              console.log('loading...');

            }
          }
         xhr.send();
  }

doAscnTask (type,sendWith,content)
{

     const url = `./models/Todo.php?userItem=${type}&doWith=${sendWith}&content=${content}`;

      const xhr = new XMLHttpRequest();

      xhr.open('GET', url, true);

      xhr.onreadystatechange = function () {

        if (xhr.readyState == 4 && xhr.status == 200) {

            let callback = xhr.responseText;


        }else if (xhr.readyState == 2) {

          console.log('loading...');
        }
      }
     xhr.send();
}


  doAllClicks ()
  {

    const data = {
         task : [],
    }

    const select = document.querySelector('.mCover');

    const modalElement = document.querySelector('.save_task_todo');

    //load list on document ready
    this.doGetAllTask(data);


    document.querySelector('.save_btn').addEventListener('click', e =>{
            let editWith = modalElement.dataset.spec;

            let task = modalElement.dataset.tak;

            let content = modalElement.value;

            if (content === '' || content.lenght > 4) {

              document.querySelector('.empty').textContent = 'Field can not be empty! ';

            }else {

              document.querySelector('.empty').textContent = '';

              //make request on save modal button trigger

              this.doAscnTask('makeEdit',editWith,content);

              select.innerHTML = '';

              //load list on request === TRUE
              this.doGetAllTask(data);

            }
    });

    document.querySelector('.addMe').addEventListener('click', e =>{

          const createList = document.querySelector('.add_task_todo').value;

          if (createList === '' || createList.lenght > 4) {

            document.querySelector('.cool').textContent = 'Field can not be empty! ';

          }else {

            document.querySelector('.cool').textContent = '';

            let dat =  new Date();

            let code = Math.random(8)+"o"+ 'code';

           //make request on add button trigger

            this.doAscnTask('insertTodo',code,createList);

            document.querySelector('.add_task_todo').value = '';

            select.innerHTML = '';

            //load list on request === TRUE
            this.doGetAllTask(data);
          }

    });

    document.querySelector('.mCover').addEventListener('click', e =>{

          let target = e.target;

          if (target.matches('.delete, .delete *')) {

            e.preventDefault();

            let deleteWith = target.dataset.spec;

           //load on edit request
            this.doAscnTask('delete',deleteWith,'');

            select.innerHTML = '';

            //load list on request === TRUE
            this.doGetAllTask(data);

        }
        else if (target.matches('.edit, .edit *')) {


            e.preventDefault();

            //effect on  edit modal
            let editWith = target.dataset.spec;

            let task = target.dataset.tak;

            modalElement.value = task;

            modalElement.dataset['spec'] = editWith;

        }
        else if (target.matches('.done, .done *')) {

           e.preventDefault();

           let doneWith = target.dataset.spec;

           //load on edit request
           this.doAscnTask('done',doneWith,'');

           let checkWith = target.dataset.id;

           let classic = '.ind-'+checkWith;

           select.innerHTML = '';

           //load list on request === TRUE
           this.doGetAllTask(data);
        }
        else if (target.matches('.keep,  .keep *')) {

          e.preventDefault();

          let editWith = target.dataset.spec;

          //load on checkbox change for request
          this.doAscnTask('undone',editWith,'');

          let checkWith = target.dataset.id;

          let classic = '.ind-'+checkWith;

          select.innerHTML = '';

           //load list on request === TRUE
          this.doGetAllTask(data);
        }


    });
    }

}

// creating an instance

const todo = new Todo();

// Call a class  function

todo.doAllClicks();
