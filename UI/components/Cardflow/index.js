/**
 * 用户登录首页
 * 
 * @module Index
 */


define(['react', '../CardPanel', '../Pagination'], function(React, CardPanel, Pagination) {
  // Require stylesheet
  require('./index.less');

  // React component
  class Cardflow extends React.Component {
    render() {
      return (
        <div className="row cardflow">
          <div className="col-md-1"></div>
          <div className="col-md-5 col-md-push-5">
            <section className="selfcard">
              <div className="selfcard-head">
                <header className="clearfix">
                  <a href="#" className="selfcard-head-pic">
                    <img className="img-circle" src={window.iu.user.avatar} width="52" height="52"/>
                  </a>
                  <div className="selfcard-head-words">
                    <p className="selfname"><strong><a href="#/profile">{window.iu.user.name}</a></strong></p>
                    <p className="selfdescription">这是待添加的描述字段</p> 
                  </div>
                </header>
              </div>  
              <div className="selfcard-body">
                <header className="clearfix">
                  <div className="a_numtext">
                    <a href="#/my" >
                      <div className="numtext">
                        <p className="num_numtext">0</p>
                        <p className="text_numtext">回答</p>
                      </div>     
                    </a>
                    <a href="#/my" className="a_numtext">
                      <div className="numtext">
                        <p className="num_numtext">0</p>
                        <p className="text_numtext">问题</p>
                      </div>     
                    </a>
                  </div>
                </header>
              </div>
            </section>
            <CardPanel />
          </div>
          <div className="col-md-5 col-md-pull-5">
            <CardPanel />
          </div>
          <div className="col-md-1"></div>
        </div>
      );
    }
  }

  return Cardflow;
});