(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["page"],{2048:function(e,t,n){"use strict";n.r(t);var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return e.page.loading?e._e():n("article",{attrs:{id:"page"}},["Home"!==e.$route.name?n("header",[n("h1",{domProps:{innerHTML:e._s(e.page.title.rendered)}})]):e._e(),n("section",{domProps:{innerHTML:e._s(e.page.content.rendered)}})])},a=[],s=(n("96cf"),n("3b8d")),i=(n("cadf"),n("551c"),n("097d"),n("f18b")),u={name:"Page",mixins:[i["a"]],props:{posttype:{type:String,default:"pages"},slug:String},asyncComputed:{page:{get:function(){var e=Object(s["a"])(regeneratorRuntime.mark(function e(){var t;return regeneratorRuntime.wrap(function(e){while(1)switch(e.prev=e.next){case 0:if(!this.wp.loading){e.next=2;break}return e.abrupt("return",{loading:!0});case 2:return t=this.wp[this.posttype](),this.slug&&(t=t.slug(this.slug)),e.next=6,t.get();case 6:return t=e.sent,e.abrupt("return",1==t.length?t[0]:t);case 8:case"end":return e.stop()}},e,this)}));function t(){return e.apply(this,arguments)}return t}()}}},p=u,o=(n("29fa"),n("2877")),c=Object(o["a"])(p,r,a,!1,null,"34c44264",null);t["default"]=c.exports},"29fa":function(e,t,n){"use strict";var r=n("b035"),a=n.n(r);a.a},b035:function(e,t,n){}}]);
//# sourceMappingURL=page.js.map