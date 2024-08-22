<p>Список пользователей в хранилище</p>
<a href="/user/edit">Добавить пользователя</a>


      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Имя</th>
              <th scope="col">Фамилия</th>
              <th scope="col">День рождения</th>
              <th scope="col">Редактирование</th>
              <th scope="col">Удаление</th>
            </tr>
          </thead>
          <tbody>
            {% for user in users %}
            <tr>       
              <td>{{ user.getUserId() }}</td>   
              <td>{{ user.getUserName() }}</td>
              <td>{{ user.getUserLastName() }}</td>
              <td>{% if user.getUserBirthday() is not empty %}
                    {{ user.getUserBirthday() | date('d.m.Y') }}
          

                  {% else %}
                    <b>Не задан</b>
                  {% endif %}
              </td>
                    <td><a href="/user/edit/?user_id={{user.userId}}">Править</a><td>
                <a href="/user/delete/?user_id={{user.userId}}">Удалить</a>
            </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>