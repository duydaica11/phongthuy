/*! For license information please see editor-site-navigation.js.LICENSE.txt */
!function(){"use strict";var e={react:function(e){e.exports=window.React},"@elementor/editor-app-bar":function(e){e.exports=window.elementorV2.editorAppBar},"@elementor/editor-documents":function(e){e.exports=window.elementorV2.editorDocuments},"@elementor/editor-panels":function(e){e.exports=window.elementorV2.editorPanels},"@elementor/editor-v1-adapters":function(e){e.exports=window.elementorV2.editorV1Adapters},"@elementor/env":function(e){e.exports=window.elementorV2.env},"@elementor/icons":function(e){e.exports=window.elementorV2.icons},"@elementor/query":function(e){e.exports=window.elementorV2.query},"@elementor/ui":function(e){e.exports=window.elementorV2.ui},"@wordpress/api-fetch":function(e){e.exports=window.wp.apiFetch},"@wordpress/i18n":function(e){e.exports=window.wp.i18n}},t={};function n(o){var a=t[o];if(void 0!==a)return a.exports;var r=t[o]={exports:{}};return e[o](r,r.exports,n),r.exports}n.d=function(e,t){for(var o in t)n.o(t,o)&&!n.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var o={};!function(){n.r(o),n.d(o,{extendIconsMap:function(){return y}});var e=n("@elementor/icons"),t=n("react"),a=n("@elementor/ui"),r=n("@elementor/editor-documents"),i=n("@elementor/query"),l=n("@wordpress/api-fetch"),s=n("@wordpress/i18n"),c=n("@elementor/editor-app-bar"),u=n("@elementor/editor-panels"),m=n("@elementor/editor-v1-adapters"),p=n("@elementor/env"),d={page:e.PageTemplateIcon,section:e.SectionTemplateIcon,container:e.ContainerTemplateIcon,"wp-page":e.PageTypeIcon,"wp-post":e.PostTypeIcon};function y(e){Object.assign(d,e)}function g({title:e,status:n}){return t.createElement(E,{title:e},t.createElement(a.Stack,{component:"span",direction:"row",alignItems:"center",spacing:.5},t.createElement(a.Typography,{component:"span",variant:"body2",sx:{maxWidth:"120px"},noWrap:!0},e),"publish"!==n.value&&t.createElement(a.Typography,{component:"span",variant:"body2",sx:{fontStyle:"italic"}},"(",n.label,")")))}function E(e){return t.createElement(a.Tooltip,{PopperProps:{sx:{"&.MuiTooltip-popper .MuiTooltip-tooltip.MuiTooltip-tooltipPlacementBottom":{mt:2.7}}},...e})}var f=["site-navigation","recent-posts"],h=d;function v({postType:n,docType:o,label:r}){const i="elementor_library"===n?"global":"primary",l=h[o]||e.PostTypeIcon;return t.createElement(a.Chip,{component:"span",size:"small",variant:"outlined",label:r,"data-value":o,color:i,icon:t.createElement(l,null),sx:{ml:1,cursor:"inherit"}})}function x(e=""){return(0,t.useMemo)((()=>{const t=document.createElement("textarea");t.innerHTML=e;const{value:n}=t;return t.remove(),n}),[e])}function _({post:e,closePopup:n,...o}){const i=(0,r.__useNavigateToDocument)(),l=x(e.title);return t.createElement(a.MenuItem,{disabled:!e.user_can.edit,onClick:async()=>{n(),await i(e.id)},...o},t.createElement(a.ListItemText,{sx:{flexGrow:0},primaryTypographyProps:{variant:"body2",noWrap:!0},primary:l}),t.createElement(v,{postType:e.type.post_type,docType:e.type.doc_type,label:e.type.label}))}var P="/elementor/v1/site-navigation/add-new-post";var w=()=>{const e="/wp/v2/users/me?"+new URLSearchParams({_fields:["capabilities"].join(","),context:"edit"}).toString();return l({path:e})},b=()=>["site-navigation","user"];function I(){return(0,i.useQuery)({queryKey:b(),queryFn:()=>w()})}function T({closePopup:n,...o}){const{create:i,isLoading:c}=function(){const[e,n]=(0,t.useState)(!1);return{create:()=>(n(!0),async function(){return await l({path:P,method:"POST",data:{post_type:"page"}})}().then((e=>e)).finally((()=>n(!1)))),isLoading:e}}(),u=(0,r.__useNavigateToDocument)(),{data:m}=I();return t.createElement(a.MenuItem,{disabled:c||!m?.capabilities?.edit_pages,onClick:async()=>{const{id:e}=await i();n(),await u(e)},...o},t.createElement(a.ListItemIcon,null,c?t.createElement(a.CircularProgress,{size:"1.25rem"}):t.createElement(e.PlusIcon,{fontSize:"small"})),t.createElement(a.ListItemText,{primaryTypographyProps:{variant:"body2"},primary:(0,s.__)("Add new page","elementor")}))}var S={page:{labels:{singular_name:(0,s.__)("Page","elementor"),plural_name:(0,s.__)("Pages","elementor")},rest_base:"pages"}},M=(e,t)=>{const n=`/wp/v2/${S[e].rest_base}`;return l({path:n,method:"POST",data:t})},C=(e,t)=>{const n=`/wp/v2/${S[e].rest_base}`,{id:o,...a}=t;return l({path:`${n}/${o}`,method:"POST",data:a})},D=(e,t)=>{const n=`/wp/v2/${S[e].rest_base}`;return l({path:`${n}/${t}`,method:"DELETE"})},L=e=>l({path:"/elementor/v1/site-navigation/duplicate-post",method:"POST",data:{post_id:e.id,title:e.title}}),k=e=>["site-navigation","posts",e],B=e=>{if(!e)return e;const t=[];return e.pages.forEach((e=>{t.push(...e.data)})),t},A={type:"page",editMode:{mode:"none",details:{}},setEditMode:()=>null,resetEditMode:()=>null,setError:()=>null},O=(0,t.createContext)(A),F=({type:e,setError:n,children:o})=>{const[a,r]=(0,t.useState)(A.editMode);return t.createElement(O.Provider,{value:{type:e,editMode:a,setEditMode:r,resetEditMode:()=>{r(A.editMode)},setError:n}},o)};function z(){const e=(0,t.useContext)(O);if(!e)throw new Error("The `usePostListContext()` hook must be used within an `<PostListContextProvider />`");return e}var N=(0,a.styled)(e.ChevronDownIcon,{shouldForwardProp:e=>"isOpen"!==e})((({theme:e,isOpen:t})=>({transform:t?"rotate(0deg)":"rotate(-90deg)",transition:e.transitions.create("transform",{duration:e.transitions.duration.standard})}))),q=(0,a.styled)(a.ListItemIcon)((({theme:e})=>({minWidth:e.spacing(4)})));function j({label:e,Icon:n,isOpenByDefault:o=!1,children:r}){const[i,l]=(0,t.useState)(o);return t.createElement(t.Fragment,null,t.createElement(a.ListItem,null,t.createElement(q,{sx:{color:"text.secondary"}},t.createElement(a.IconButton,{onClick:()=>l((e=>!e)),size:"small",sx:{color:"inherit"}},t.createElement(N,{fontSize:"small",isOpen:i}))),t.createElement(q,{size:"small",sx:{color:"inherit"}},t.createElement(n,{fontSize:"small"})),t.createElement(a.ListItemText,{primaryTypographyProps:{variant:"subtitle2",component:"span"},primary:e})),t.createElement(a.Collapse,{in:i,timeout:"auto",unmountOnExit:!0},t.createElement(a.List,{dense:!0},r)),t.createElement(a.Divider,{sx:{mt:1}}))}function V(e){const t=function(e){const t=(0,i.useQueryClient)();return(n={})=>{const o=k(e);return t.invalidateQueries({queryKey:f},n),t.invalidateQueries({queryKey:o},n)}}(e),n=()=>t({exact:!0});return{createPost:(0,i.useMutation)({mutationFn:t=>M(e,t),onSuccess:n}),updatePost:(0,i.useMutation)({mutationFn:t=>C(e,t),onSuccess:n}),deletePost:(0,i.useMutation)({mutationFn:t=>D(e,t),onSuccess:n}),duplicatePost:(0,i.useMutation)({mutationFn:e=>L(e),onSuccess:n})}}function $({postTitle:e,isLoading:n,callback:o}){const[r,i]=(0,t.useState)(e),[l,c]=(0,t.useState)(!1),[u,m]=(0,t.useState)(null),p=(0,t.useRef)(),d=e=>""!==e.trim(),y=()=>{d(r)&&o(r)};return t.createElement(t.Fragment,null,t.createElement(a.ListItem,{secondaryAction:t.createElement(H,{isLoading:n,closeButton:p})},t.createElement(a.Box,{width:"100%",component:"form",onSubmit:e=>{e.preventDefault(),y()}},t.createElement(a.TextField,{autoFocus:!0,fullWidth:!0,value:r,onChange:e=>{l||c(!0);const t=e.target.value;d(t)?m(null):m((0,s.__)("Name is required","elementor")),i(t)},disabled:n,error:!!u,onBlur:e=>{p.current!==e.relatedTarget&&y()},variant:"outlined",color:"secondary",size:"small"}))),u&&t.createElement(a.ListItem,null,t.createElement(a.ListItemText,{sx:{color:"error.main"}},u)))}function H({isLoading:n,closeButton:o}){const{resetEditMode:r}=z();return t.createElement(a.IconButton,{size:"small",color:"secondary",onClick:r,ref:o,disabled:n},n?t.createElement(a.CircularProgress,null):t.createElement(e.XIcon,{fontSize:"small"}))}function W({post:e}){const{type:n,resetEditMode:o}=z(),{updatePost:a}=V(n),{setError:i}=z(),l=(0,r.__useActiveDocument)(),s=async e=>{const t=function(){const e=window.elementor?.documents;if(!e)throw new Error("Elementor Editor V1 documents manager not found");return e}().getCurrent().container;await(0,m.__privateRunCommand)("document/elements/settings",{container:t,settings:{post_title:e}})},c=l?.id===e.id,u=c?l?.title:e.title.rendered;return t.createElement($,{postTitle:u,isLoading:a.isPending,callback:async t=>{t===u&&o();try{c?await s(t):await a.mutateAsync({id:e.id,title:t})}catch(e){i()}finally{o()}}})}function Q(){const{type:e,resetEditMode:n}=z(),{createPost:o}=V(e),a=(0,r.__useNavigateToDocument)(),{setError:i}=z();return t.createElement($,{postTitle:(0,s.__)("New Page","elementor"),isLoading:o.isPending,callback:async e=>{try{const{id:t}=await o.mutateAsync({title:e,status:"draft"});a(t)}catch(e){i()}finally{n()}}})}function R(){const{type:e,editMode:n,resetEditMode:o}=z(),a=(0,r.__useNavigateToDocument)(),{duplicatePost:i}=V(e),{setError:l}=z();return"duplicate"!==n.mode?null:t.createElement($,{postTitle:`${n.details.title} ${(0,s.__)("copy","elementor")}`,isLoading:i.isPending,callback:async e=>{try{const{post_id:t}=await i.mutateAsync({id:n.details.postId,title:e});a(t)}catch(e){l()}finally{o()}}})}var K=({status:e})=>"publish"===e?null:t.createElement(a.Typography,{component:"span",variant:"body2",color:"text.secondary",sx:{textTransform:"capitalize",fontStyle:"italic",whiteSpace:"nowrap",flexBasis:"content"}},"(",e,")"),U=({title:e})=>{const n=x(e);return t.createElement(a.Typography,{component:"span",variant:"body2",color:"text.secondary",noWrap:!0,sx:{flexBasis:"auto"}},n)};function G({title:e,status:n}){return t.createElement(a.Box,{display:"flex"},t.createElement(U,{title:e})," ",t.createElement(K,{status:n}))}function X({title:e,icon:n,MenuItemProps:o}){return t.createElement(a.MenuItem,{...o},t.createElement(a.ListItemIcon,{sx:{color:"inherit"}},t.createElement(n,null)),t.createElement(a.ListItemText,{primary:e}))}function Y({post:n}){const{setEditMode:o}=z();return t.createElement(X,{title:(0,s.__)("Rename","elementor"),icon:e.EraseIcon,MenuItemProps:{disabled:!n.user_can.edit,onClick:()=>{o({mode:"rename",details:{postId:n.id}})}}})}function J({post:n,popupState:o}){const{setEditMode:a}=z(),{data:r}=I(),i=!r?.capabilities?.edit_pages;return t.createElement(X,{title:(0,s.__)("Duplicate","elementor"),icon:e.CopyIcon,MenuItemProps:{disabled:i,onClick:()=>{o.close(),a({mode:"duplicate",details:{postId:n.id,title:n.title.rendered}})}}})}function Z({post:n}){const[o,a]=(0,t.useState)(!1),i=(0,r.__useActiveDocument)(),l=i?.id===n.id,c=!n.user_can.delete||n.isHome||l;return t.createElement(t.Fragment,null,t.createElement(X,{title:(0,s.__)("Delete","elementor"),icon:e.TrashIcon,MenuItemProps:{disabled:c,onClick:()=>a(!0),sx:{"&:hover":{color:"error.main"}}}}),o&&t.createElement(ee,{post:n,setIsDialogOpen:a}))}function ee({post:e,setIsDialogOpen:n}){const{type:o}=z(),{deletePost:r}=V(o),{setError:i}=z(),l=(0,s.sprintf)((0,s.__)('Delete "%s"?',"elementor"),e.title.rendered),c=()=>{r.isPending||n(!1)};return t.createElement(a.Dialog,{open:!0,onClose:c,"aria-labelledby":"delete-dialog"},t.createElement(a.DialogTitle,{noWrap:!0},l),t.createElement(a.Divider,null),t.createElement(a.DialogContent,null,t.createElement(a.DialogContentText,null,(0,s.__)("The page and its content will be deleted forever and we won’t be able to recover them.","elementor"))),t.createElement(a.DialogActions,null,t.createElement(a.Button,{variant:"contained",color:"secondary",onClick:c,disabled:r.isPending},(0,s.__)("Cancel","elementor")),t.createElement(a.Button,{variant:"contained",color:"error",onClick:async()=>{try{await r.mutateAsync(e.id)}catch(e){i(),n(!1)}},disabled:r.isPending},r.isPending?t.createElement(a.CircularProgress,null):(0,s.__)("Delete","elementor"))))}function te({post:n}){const{type:o}=z(),a=(0,s.__)("View %s","elementor").replace("%s",S[o].labels.singular_name);return t.createElement(X,{title:a,icon:e.EyeIcon,MenuItemProps:{onClick:()=>window.open(n.link,"_blank")}})}var ne=e=>l({path:"/wp/v2/settings",method:"POST",data:e}),oe=()=>["site-navigation","homepage"];function ae({post:n,closeMenu:o}){const{updateSettingsMutation:r}=function(){const e=function(){const e=(0,i.useQueryClient)();return(t={})=>{const n=oe();return e.invalidateQueries({queryKey:n},t)}}();return{updateSettingsMutation:(0,i.useMutation)({mutationFn:e=>ne(e),onSuccess:async()=>e({exact:!0})})}}(),{setError:l}=z(),{data:c}=I(),u=!!c?.capabilities?.manage_options,m="publish"===n.status,p=!!n.isHome,d=!u||p||!m||r.isPending;return t.createElement(X,{title:(0,s.__)("Set as homepage","elementor"),icon:r.isPending?a.CircularProgress:e.HomeIcon,MenuItemProps:{disabled:d,onClick:async()=>{try{await r.mutateAsync({show_on_front:"page",page_on_front:n.id})}catch(e){l()}finally{o()}}}})}var re=({children:e,isDisabled:n})=>{if(n){const n=t.createElement(a.Typography,{variant:"caption"},"You cannot edit this page.",t.createElement("br",null),"To edit it directly, contact the site owner");return t.createElement(a.Tooltip,{title:n,placement:"bottom",arrow:!1},e)}return t.createElement(t.Fragment,null,e)};function ie({post:n}){const o=(0,r.__useActiveDocument)(),i=(0,r.__useNavigateToDocument)(),l=(0,a.usePopupState)({variant:"popover",popupId:"post-actions",disableAutoFocus:!0}),c=o?.id===n.id,u=c?o?.status.value:n.status,m=c?o?.title:n.title.rendered,p=!n.user_can.edit;return t.createElement(t.Fragment,null,t.createElement(re,{isDisabled:p},t.createElement(a.ListItem,{disablePadding:!0,secondaryAction:t.createElement(a.IconButton,{value:!0,size:"small",...(0,a.bindTrigger)(l)},t.createElement(e.DotsVerticalIcon,{fontSize:"small"}))},t.createElement(a.ListItemButton,{selected:c,disabled:p,onClick:()=>{c||i(n.id)},dense:!0},t.createElement(a.ListItemText,{disableTypography:!0},t.createElement(G,{title:m,status:u})),n.isHome&&t.createElement(e.HomeIcon,{titleAccess:(0,s.__)("Homepage","elementor"),color:"disabled"})))),t.createElement(a.Menu,{PaperProps:{sx:{mt:2,width:200}},MenuListProps:{dense:!0},...(0,a.bindMenu)(l)},t.createElement(Y,{post:n}),t.createElement(J,{post:n,popupState:l}),t.createElement(Z,{post:n}),t.createElement(te,{post:n}),t.createElement(a.Divider,null),t.createElement(ae,{post:n,closeMenu:()=>l.close()})))}function le({post:e}){const{editMode:n}=z();return"rename"===n.mode&&e?.id&&e?.id===n.details.postId?t.createElement(W,{post:e}):"create"!==n.mode||e?"duplicate"!==n.mode||e?e?t.createElement(ie,{post:e}):null:t.createElement(R,null):t.createElement(Q,null)}function se(){const{setEditMode:n}=z(),{data:o}=I();return t.createElement(a.Button,{size:"small",startIcon:t.createElement(e.PlusIcon,null),disabled:!o?.capabilities?.edit_pages,onClick:()=>{n({mode:"create",details:{}})},sx:{px:1.5}},(0,s.__)("Add New","elementor"))}function ce(){return t.createElement(a.Box,{sx:{display:"flex",flexDirection:"column",justifyContent:"center",alignItems:"center",pt:"40px",gap:"16px"}},t.createElement(e.Error404TemplateIcon,null),t.createElement(a.Box,{sx:{display:"flex",flexDirection:"column",justifyContent:"center",alignItems:"center",gap:"8px"}},t.createElement(a.Typography,{variant:"body1",color:"text.primary"},(0,s.__)("We couldn’t display your pages.","elementor")),t.createElement(a.Box,null,t.createElement(a.Typography,{variant:"body2",color:"text.primary",sx:{textAlign:"center"}},(0,s.__)("It’s probably a temporary issue.","elementor")),t.createElement(a.Typography,{variant:"body2",color:"text.primary",sx:{textAlign:"center"}},(0,s.__)("If the problem persists,","elementor")," ",t.createElement(a.Link,{target:"_blank",href:"https://go.elementor.com/wp-editor-support-open-ticket/"},"Notify support")))))}function ue({isOpenByDefault:n=!1}){const{type:o,editMode:r}=z(),{data:{posts:s,total:c},isLoading:u,isError:m,fetchNextPage:p,hasNextPage:d,isFetchingNextPage:y}=function(e){const t=(0,i.useInfiniteQuery)({queryKey:k(e),queryFn:({pageParam:t=1})=>(async(e,t)=>{const n=`/wp/v2/${S[e].rest_base}?`+new URLSearchParams({status:"any",order:"asc",page:t.toString(),per_page:10..toString(),_fields:["id","type","title","link","status","user_can"].join(",")}).toString(),o=await l({path:n,parse:!1});return{data:await o.json(),totalPages:Number(o.headers.get("x-wp-totalpages")),totalPosts:Number(o.headers.get("x-wp-total")),currentPage:t}})(e,t),initialPageParam:1,getNextPageParam:e=>e.currentPage<e.totalPages?e.currentPage+1:void 0});return{...t,data:{posts:B(t.data),total:t.data?.pages[0]?.totalPosts??0}}}(o),{data:g}=(0,i.useQuery)({queryKey:oe(),queryFn:()=>l({path:"/elementor/v1/site-navigation/homepage"})});if(m)return t.createElement(ce,null);if(!s||u)return t.createElement(a.Box,{sx:{px:5}},t.createElement(a.Box,{display:"flex",justifyContent:"flex-end",alignItems:"center"},t.createElement(a.Skeleton,{sx:{my:4},animation:"wave",variant:"rounded",width:"110px",height:"28px"})),t.createElement(a.Box,null,t.createElement(a.Skeleton,{sx:{my:3},animation:"wave",variant:"rounded",width:"100%",height:"24px"}),t.createElement(a.Skeleton,{sx:{my:3},animation:"wave",variant:"rounded",width:"70%",height:"24px"}),t.createElement(a.Skeleton,{sx:{my:3},animation:"wave",variant:"rounded",width:"70%",height:"24px"}),t.createElement(a.Skeleton,{sx:{my:3},animation:"wave",variant:"rounded",width:"70%",height:"24px"})));const E=`${S[o].labels.plural_name} (${c.toString()})`,f=s.map((e=>e.id===g?{...e,isHome:!0}:e)).sort(((e,t)=>e.id===g?-1:t.id===g?1:0));return t.createElement(t.Fragment,null,t.createElement(a.Box,{display:"flex",justifyContent:"flex-end",alignItems:"center",sx:{py:1,px:2}},t.createElement(se,null)),t.createElement(a.List,{dense:!0},t.createElement(j,{label:E,Icon:e.PageTypeIcon,isOpenByDefault:n||!1},f.map((e=>t.createElement(le,{key:e.id,post:e}))),["duplicate","create"].includes(r.mode)&&t.createElement(le,null),d&&t.createElement(a.Box,{sx:{display:"flex",justifyContent:"center"}},t.createElement(a.Button,{onClick:p,color:"secondary"},y?t.createElement(a.CircularProgress,null):"Load More")))))}var me=({open:e,onClose:n})=>t.createElement(a.Snackbar,{open:e,onClose:n,anchorOrigin:{vertical:"bottom",horizontal:"left"}},t.createElement(a.Alert,{onClose:n,severity:"error",sx:{width:"100%"}},t.createElement(a.Typography,{component:"span",sx:{fontWeight:"bold"}},"We couldn’t complete the action.")," ","Please try again")),{panel:pe,usePanelStatus:de,usePanelActions:ye}=(0,u.__createPanel)({id:"site-navigation-panel",component:()=>{const[e,n]=t.useState(!1);return t.createElement(u.Panel,null,t.createElement(u.PanelHeader,null,t.createElement(u.PanelHeaderTitle,null,(0,s.__)("Pages","elementor"))),t.createElement(u.PanelBody,null,t.createElement(F,{type:"page",setError:()=>n(!0)},t.createElement(ue,{isOpenByDefault:!0})),t.createElement(me,{open:e,onClose:()=>n(!1)})))}});var{env:ge,validateEnv:Ee}=(0,p.parseEnv)("@elementor/editor-site-navigation",(e=>e));(0,c.injectIntoPageIndication)({id:"document-recently-edited",component:function(){const n=(0,r.__useActiveDocument)(),o=(0,r.__useHostDocument)(),c=n&&"kit"!==n.type.value?n:o,{data:u}=(0,i.useQuery)({queryKey:f,queryFn:()=>(()=>{const e=`/elementor/v1/site-navigation/recent-posts?${new URLSearchParams({posts_per_page:"6"}).toString()}`;return l({path:e})})()}),m=u?u.filter((e=>e.id!==c?.id)).splice(0,5):[],p=(0,a.usePopupState)({variant:"popover",popupId:"elementor-v2-top-bar-recently-edited"}),d=x(c?.title);return c?t.createElement(t.Fragment,null,t.createElement(a.Button,{color:"inherit",size:"small",endIcon:t.createElement(e.ChevronDownIcon,{fontSize:"small"}),...(0,a.bindTrigger)(p)},t.createElement(g,{title:d,status:c.status})),t.createElement(a.Menu,{MenuListProps:{subheader:t.createElement(a.ListSubheader,{color:"primary",sx:{fontStyle:"italic",fontWeight:"300"}},(0,s.__)("Recent","elementor"))},PaperProps:{sx:{mt:2.5,width:320}},...(0,a.bindMenu)(p)},m.map((e=>t.createElement(_,{key:e.id,post:e,closePopup:p.close}))),0===m.length&&t.createElement(a.MenuItem,{disabled:!0},t.createElement(a.ListItemText,{primaryTypographyProps:{variant:"caption",fontStyle:"italic"},primary:(0,s.__)("There are no other pages or templates on this site yet.","elementor")})),t.createElement(a.Divider,{disabled:0===m.length}),t.createElement(T,{closePopup:p.close}))):null}}),ge.is_pages_panel_active&&((0,u.__registerPanel)(pe),c.toolsMenu.registerToggleAction({id:"toggle-site-navigation-panel",priority:2,useProps:function(){const{isOpen:t,isBlocked:n}=de(),{open:o,close:a}=ye();return{title:(0,s.__)("Pages","elementor"),icon:e.PagesIcon,onClick:()=>t?a():o(),selected:t,disabled:n}}}))}(),(window.elementorV2=window.elementorV2||{}).editorSiteNavigation=o}();