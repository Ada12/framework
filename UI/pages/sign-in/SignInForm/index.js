define(['react', 'jquery'], function(React, $) {
  require('./index.less');

  class SignInForm extends React.Component {
    _handleSubmit(e) {
      e.preventDefault();
      var $form = $(React.findDOMNode(this.refs['form']));

      $.post('/session', $form.serialize())
        .done(function(data) {
          location.path = '/';
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
            <input className="form-control" type="password" name="password" placeholder="密码" required="" />
            <input className="form-control button_s" type="submit" value="登录"/>
          </div>
        </form>
      );
    }
  }

  return SignInForm;
});