!function(){function t(t){return t&&t.__esModule?t.default:t}const i=(t,i,e)=>{if(t.matches(i))return t;if("BODY"===t.tagName||"HTML"===t.tagName)return;let n;e=e||20;for(let n=0;n<e;n++){const e=t.parentNode;if(!e||"BODY"===e.tagName||"HTML"===e.tagName)break;if(e.matches(i))return e;t=e}return n};var e;e=jQuery,function(){function n(n){const s=i(this,".kirki-discount-notice");if(!s)return;let a=s.dataset.dismissNonce;a=a||"",t(e).ajax({url:ajaxurl,type:"post",data:{action:"kirki_dismiss_discount_notice",nonce:a,dismiss:1}}).always((function(t){t.success&&console.log(t.data)}))}t(e)(document).on("click",".kirki-discount-notice.is-dismissible .notice-dismiss",n)}()}();
//# sourceMappingURL=discount-notice.js.map
