/**
 * 卡片基础页
 * 
 * @module CardPanel
 */


define(['react'], function(React) {
  // Require stylesheet
  require('./index.less');

  // React component
  class CardPanel extends React.Component {
    render() {
      return (
        <section className="card-panel">
          <div className="card-panel-body">
            <div className="card-panel-head">
                <a className="card-panel-companyname" href="">网易</a>
              <span className="card-panel-recorded">
                <span className="glyphicon glyphicon-time" aria-hidden="true"> </span><span> 4分钟前</span>
              </span>
            </div>
            
            <div className="card-panel-content">
              <p className="card-panel-content-p">Angular.js当中，编译一个指令发生在什么阶段？</p>
            </div>
            
            <div className="card-panel-bottom">
              <span className="card-panel-num-answers">
                <a href="#/question">200条回答</a>
              </span>
              <span className="card-panel-num-asked">
                <a href="#/question">49人面过</a> 
              </span>
            </div>
          </div>
        </section>
      );
    }
  }

  return CardPanel;
});