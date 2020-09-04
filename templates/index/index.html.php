{% extends 'base.html.twig' %}

{% block body %}
  <div class="text-center">
    <h3>My Symfony 4 sample projectsss</h3>
    <div class="jumbotron text-center" id="app">
      <example></example>
    </div>
    <div id="loginBloc">
      <login-form></login-form>
    </div>
  </div>
{% endblock %}



{% block javascripts %}
  {{ parent() }}
  {{ encore_entry_script_tags('js/app/loginForm') }}
{% endblock %}