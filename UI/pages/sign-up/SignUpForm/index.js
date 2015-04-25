define(['react', 'jquery'], function(React, $) {
  require('./index.less');

  class SignUpForm extends React.Component {
    _handleSubmit(e) {
      e.preventDefault();
      var $form = $(React.findDOMNode(this.refs['form']));

      $.post('/users', $form.serialize())
        .done(function(data) {
          console.log(data);
          location.path = '/sign-in';
          location.reload();
        })
        .fail(function(err) {
          console.log(err);
        });
    }

    render() {
      return (
        <form ref="form" onSubmit={this._handleSubmit.bind(this)}>
          <div>
            <input className="form-control" type="email" name="email" placeholder="邮箱" required="" />
            <input className="form-control" type="text" name="name" placeholder="用户名" required="" />
            <input className="form-control" type="password" name="password" placeholder="密码" required="" />
            <input className="form-control button_s" type="submit" value="注册"/>
          </div>
        </form>
      );
    }
  }

  return SignUpForm;
});