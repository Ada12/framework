/**
 * 用户登录首页
 * 
 * @module Index
 */


define(['react', 'components'], function(React, components) {
  // Require stylesheet

  // React component
  var {
    Cardflow,
    Pagination 
  } = components;

  class MainPage extends React.Component {
    render() {
      return (
        <div className="container">
          <div className="row">
            <div><Cardflow /></div>
          </div>
          <Pagination />
        </div>
      );
    }
  }

  return MainPage;
});