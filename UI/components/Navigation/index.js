'use strict';

/**
 * 顶部导航
 *
 * @module Navigation
 */

define(['react', 'jquery'], function(React, $) {
  // Require stylesheet
  require('./index.less');
  
  // React component
  class Navigation extends React.Component {
    _handleSignOff(e) {
      e.preventDefault();
      $.ajax({
        url: '/session/destroy',
        type: 'DELETE',
        headers: {
          'x-csrf-token': window.iu._token
        }
      }).done(function() {
        location.href = '/';
        location.reload();
      }).fail(function(err) {
        console.log(err);
      });
    }

    render() {
      if (this.props.user) {
        // 用户已经登录
        return (
          <nav className="navigation">
            <ul className="navigation-leftnav">
              <li className="navigation-item">
                <a href="#" className="navigation-link">首页</a>
              </li>
              <li className="navigation-item">
                <a href="#" className="navigation-link">我的问题</a>
              </li>
            </ul>

            <ul className="navigation-rightnav">
              <li className="navigation-item">
                <a href="#" className="navigation-link">个人中心</a>
              </li>
              <li className="navigation-item">
                <a href="#" className="navigation-link" onClick={this._handleSignOff}>登出</a>
              </li>
            </ul>
          </nav>
        );
      }
      else {
        // 用户尚未登录
        return (
          <nav className="navigation">
            <ul className="navigation-leftnav">
              <li className="navigation-item">
                <a href="#" className="navigation-link">首页</a>
              </li>
            </ul>

            <ul className="navigation-rightnav">
              <li className="navigation-item">
                <a href="/sign-in" className="navigation-link">登录</a>
              </li>
              <li className="navigation-item">
                <a href="/sign-up" className="navigation-link">注册</a>
              </li>
            </ul>
          </nav>
        );
      }
    }
  }

  Navigation.propTypes = {
    user: React.PropTypes.object
  };

  Navigation.defaultProps = {
    user: null
  };

  return Navigation;
});