/**
 * 全局顶通
 * 
 * @module Header
 */


define(['react', '../Navigation'], function(React, Navigation) {
  // Require stylesheet
  require('./index.less');

  // React component
  class Header extends React.Component {
    render() {
      return (
        <header className="header">
          <div className="container">
            <div className="row">
              <div className="col-sm-2">
                <div className="header-submod-wrap">
                  <a href="/" className="header-logo">InterU</a>
                </div>
              </div>
              <div className="col-sm-8">
                <div className="header-submod-wrap">
                  <Navigation />
                </div>
              </div>
              <div className="col-sm-2">
                <div className="header-submod-wrap">
                  <a className="header-button" href="#">
                    <span className="iconfont">&#xe606;</span>
                  </a> 
                </div>
              </div> 
            </div>
          </div>
        </header>
      );
    }
  }

  return Header;
});