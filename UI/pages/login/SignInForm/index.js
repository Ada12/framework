define(['react', 'jquery'], function(React, $) {
  require('./index.less');

  class SignInForm extends React.Component {
    _handleSubmit(e) {
      e.preventDefault();
      var $form = $(React.findDOMNode(this.refs['form'])),
        $csrfToken = $(React.findDOMNode(this.refs['csrf_token']));
      $csrfToken.val(window.iu['_token']);

      $.post('/session', $form.serialize())
        .done(function(data) {
          console.log(data);
        })
        .fail(function(err) {
          console.log(err);
        });
    }

    render() {
      return (
        <form ref="form" onSubmit={this._handleSubmit.bind(this)}>
          <div>
            <input ref="csrf_token" name="_token" value="" type="hidden"/>
            <input className="form-control" type="email" name="email" placeholder="邮箱" required="" />
            <input className="form-control" type="password" name="password" placeholder="密码" required="" />
            <input className="form-control button_s" type="submit" value="登陆"/>
          </div>
        </form>
      );
    }
  }

  return SignInForm;
});