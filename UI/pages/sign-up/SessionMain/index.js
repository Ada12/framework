define(['react', 'jquery', 'rx', '../SignUpForm'], 
  function(React, $, Rx, SignInForm) {

  require('./index.less');

  class SessionMain extends React.Component {
    _handleSubmit(e) {
      e.preventDefault();
    }

    render() {
      return (
      <div>
      <div className="login-head">
        <div className="container">
            <div className="row">
              <div className="col-sm-1"></div>
              <div className="col-sm-5">
                <p>InterU</p>
                <p></p>
                <p>--分享面试，面试分享--</p>
              </div>
              <div className="col-sm-1"></div>
              <div className="col-sm-3">
                <SignInForm />
              </div>
              <div className="col-sm-2"></div>
            </div>
        </div>
      </div>
        <div className="container">
          <div className="row">
            <div className="col-sm-6 passage-content">
              <p className="passage-heading">
                <span className="text-muted">面试一战，</span> 
                <b>你</b>准备好了吗
              </p>
              <p className="passage-body">
                你怎么理解你应聘的职位？请你自我介绍一下？你觉得你个性上最大的优点是什么？在五年的时间内，你的职业规划是什么？如果你被录用，你对公司有什么要求？我们为什么要聘用你？工作一段时间不适合这个职位,你怎么办？这个职位，你认为你还欠缺什么？与领导的意见有分歧，你应该怎么做？请给谈谈你自己的一些情况你工作经验欠缺，如何能胜任这项工作？请谈一谈你的弱点。你认为自己最大的缺点是什么？请谈谈你的优点。空闲时喜欢什么消遣？你的好朋友怎样形容你？你的最大特色是什么？你所取得的最大成就是什么？你现在最感兴趣的是什么？你的学习成绩如何？你在自我调节方面做何种努力？你比较喜欢独立工作还是集体工作？你希望在本公司工作多长时间？若你到我们公司后，如何看待你本人的地位。请你谈一下和本工作有关的工作经验你对本公司（或这份工作）有什么看法吗？你为什么要离开前一家单位？你有什么社会实践经验？你为什么选择现在的学校和专业？
              </p>
            </div>
            <div className="col-sm-6">
              <img className="featurette-image" data-src="holder.js/500x500/auto" alt="500x500" src="http://geotypografika.com/wp-content/uploads/2009/01/8851-500-500.jpg" data-holder-rendered="true" />
            </div>
          </div>
          <br />
          <hr />
          <br />
          <div className="row">
            <div className="col-sm-6">
              <img class="featurette-image" data-src="holder.js/500x500/auto" alt="500x500" src="http://img1.cache.netease.com/edu/2011/10/9/201110091059517dda1.jpg" data-holder-rendered="true" />
            </div>
            <div className="col-sm-6">
              <p className="passage-heading">
                <span className="text-muted">面试结果</span> 
                <b>你</b>满意吗？
              </p>
              <p className="passage-body">
                若干次想要分享，如何才能让更多人看到?<br />
                遇过的面试官比交过的对象还多，努力成为面霸！<br />
                其实我也不是很会写文案。<br />
                今天遇到的题目真有趣。<br />
                我也不知道该怎么回答。<br />
                如果今天面试官这样问...<br />
                答不上来的窘境，我这辈子再也不想遇到第二次。<br />
                如果去阿里巴巴面试，会不会遇到马云大大啊？<br />
                阿里和腾讯我该选哪个？就像我当时纠结清华和北大该上哪一个。<br />
                其实，以上问题，我们也没法帮你解决<br />
                祝你平安~~哦哦哦~~祝你平安~~<br />
              </p>
            </div>
          </div>
        </div>
      </div>
      );
    }
  }

  return SessionMain;
});