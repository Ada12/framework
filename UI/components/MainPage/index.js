/**
 * 用户登录首页
 * 
 * @module Index
 */


define(['react', '../Cardflow', '../Pagination'], function(React, Cardflow, Pagination) {
  // Require stylesheet

  // React component
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