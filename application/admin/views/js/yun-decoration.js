//门店装修模块
define(['jqueryui','utils','charcount','swiper','m_uploader','ueditor_all','zh_cn','zeroclip'],function(zcl){
	
	/**
 * [DEF_CONF 默认配置]
 * m1000 搜索
 * m1011 店招
 * m1012 店铺信息
 * m1004 商品推荐 自动
 */
var DEF_CONF={
	'm1000':{
		show:true,
		orderNum:-10,
	},
	'm1011':{
		show:true,
		orderNum:-9,
	},
	'm1012':{
		show:true,
		orderNum:-8,
	},
	'm1006':{ //活动导航
		hasMiaosha:true,
		hasHongbao:true,
		hasNewhot:true,
		hasCoupon:true,
		appointment:false,
		hasClass:false,
		hasSign:false,
		hasExchange:false,
		orderNum:1,
	},
	'm1004':{
		hasTitle:true,
		autoRecommend:true,//是否自动推荐
		autoPms:{ //自动: 查询参数
			keywords:'',
			limitNum:8,
			showListType:'category',
			showListByBrand:false, //是否按品牌展示列表
			showListTypeInfo:null,   //选择 按类目或按品牌 的选择信息
			orderTypeNum:0
		},
		productInfoAuto:[{ //自动推荐的商品信息（根据配置异步获取后生成，用于渲染数据）
			titleInfo:{id:0, name:''},
			proInfo:[] // {proid:'', proname:'', proimg:'', proprice:'', tagprice:'', stockid:'',tags:''}
		}],
		orderNum:2
	}
}
	
	/**
 * [RES_CONF 最终保存的配置]
 */
RES_CONF={}

PAGE_CONF={
	apiSaveConfUrl:{"status":"5000"},// 保存装修配置 !!
	apiGetSupplierFrontConf:{"status":"1"},// 获取装修配置 !!
	apiGetSpecialPromotion:{"result":{"specialPromotionList":[],"count":0},"status":"0"},// 获取专题活动列表
	apiGetDiscountPromotion: {"result":{"all":true,"count":0,"discountPromotionVoList":[]},"status":"0"},// 获取满减满折活动列表
	apiGetScratchPromotion: {"status":"0","result":{"all":true,"count":0,"luckyDrawList":[]}},// 刮刮卡列表
	apiGetWheelPromotion: {"status":"0","result":{"all":true,"count":0,"luckyDrawList":[]}},// 获取大转盘列表
	apiGetCategoryList: {"result":{"categoryFamilyVoList":[{"id":38,"categoryFamily":{"id":38,"familyName":"家纺/家居/建材","familyPriority":null},"categoryVoList":[{"id":1283,"productCount":1,"category":{"id":1283,"familyId":38,"name":"休闲毯/毛毯","categoryPriority":"x"}}]},{"id":6,"categoryFamily":{"id":6,"familyName":"生活用品","familyPriority":null},"categoryVoList":[{"id":803,"productCount":2,"category":{"id":803,"familyId":6,"name":"浴巾","categoryPriority":"y"}}]},{"id":16,"categoryFamily":{"id":16,"familyName":"童装童鞋","familyPriority":null},"categoryVoList":[{"id":1645,"productCount":3,"category":{"id":1645,"familyId":16,"name":"儿童卫衣/绒衫","categoryPriority":"e"}},{"id":2470,"productCount":3,"category":{"id":2470,"familyId":16,"name":"儿童POLO衫","categoryPriority":"e"}},{"id":71,"productCount":7,"category":{"id":71,"familyId":16,"name":"儿童上衣","categoryPriority":"e"}},{"id":1799,"productCount":1,"category":{"id":1799,"familyId":16,"name":"儿童连衣裙","categoryPriority":"e"}},{"id":2508,"productCount":4,"category":{"id":2508,"familyId":16,"name":"儿童背带裤","categoryPriority":"e"}},{"id":72,"productCount":6,"category":{"id":72,"familyId":16,"name":"儿童裤子","categoryPriority":"e"}},{"id":1800,"productCount":22,"category":{"id":1800,"familyId":16,"name":"儿童外套","categoryPriority":"e"}},{"id":1803,"productCount":1,"category":{"id":1803,"familyId":16,"name":"儿童打底衫","categoryPriority":"e"}},{"id":1804,"productCount":1,"category":{"id":1804,"familyId":16,"name":"儿童裙衫","categoryPriority":"e"}},{"id":1508,"productCount":1,"category":{"id":1508,"familyId":16,"name":"儿童裙裤","categoryPriority":"e"}},{"id":1885,"productCount":2,"category":{"id":1885,"familyId":16,"name":"儿童衬衣","categoryPriority":"e"}},{"id":1609,"productCount":1,"category":{"id":1609,"familyId":16,"name":"儿童冲锋裤","categoryPriority":"e"}},{"id":1907,"productCount":1,"category":{"id":1907,"familyId":16,"name":"儿童棉衣","categoryPriority":"e"}},{"id":1610,"productCount":2,"category":{"id":1610,"familyId":16,"name":"儿童单件冲锋衣","categoryPriority":"e"}},{"id":1908,"productCount":4,"category":{"id":1908,"familyId":16,"name":"儿童长裤","categoryPriority":"e"}},{"id":1622,"productCount":8,"category":{"id":1622,"familyId":16,"name":"儿童牛仔裤","categoryPriority":"e"}},{"id":1910,"productCount":2,"category":{"id":1910,"familyId":16,"name":"儿童两件套","categoryPriority":"e"}},{"id":1623,"productCount":2,"category":{"id":1623,"familyId":16,"name":"儿童休闲裤","categoryPriority":"e"}},{"id":1634,"productCount":9,"category":{"id":1634,"familyId":16,"name":"儿童T恤","categoryPriority":"e"}},{"id":1636,"productCount":8,"category":{"id":1636,"familyId":16,"name":"儿童衬衫","categoryPriority":"e"}},{"id":1638,"productCount":2,"category":{"id":1638,"familyId":16,"name":"儿童风衣","categoryPriority":"e"}},{"id":1639,"productCount":2,"category":{"id":1639,"familyId":16,"name":"儿童夹克","categoryPriority":"e"}},{"id":1640,"productCount":2,"category":{"id":1640,"familyId":16,"name":"儿童马甲","categoryPriority":"e"}},{"id":1641,"productCount":3,"category":{"id":1641,"familyId":16,"name":"儿童毛衣/针织衫","categoryPriority":"e"}},{"id":2114,"productCount":1,"category":{"id":2114,"familyId":16,"name":"儿童开衫","categoryPriority":"e"}},{"id":2092,"productCount":1,"category":{"id":2092,"familyId":16,"name":"男童衬衫","categoryPriority":"n"}},{"id":2093,"productCount":1,"category":{"id":2093,"familyId":16,"name":"男童T恤","categoryPriority":"n"}},{"id":2094,"productCount":2,"category":{"id":2094,"familyId":16,"name":"男童毛衣","categoryPriority":"n"}},{"id":2098,"productCount":2,"category":{"id":2098,"familyId":16,"name":"男童裤子","categoryPriority":"n"}},{"id":2100,"productCount":1,"category":{"id":2100,"familyId":16,"name":"男童马甲","categoryPriority":"n"}},{"id":2108,"productCount":6,"category":{"id":2108,"familyId":16,"name":"女童外套","categoryPriority":"n"}}]}]},"status":"0"},// 获取商户下所有类目
	homePreviw:'',// 移动端预览
	apiGetSelfGroupList:{"status":"0","result":{"groupList":[{"firstLevel":[{"id":9589,"supplierId":11773,"groupName":"中童（3-6）","rootId":0,"groupPriority":"1478076688219","groupLevel":1,"gmtCreate":1478076688000,"groupId":9589,"productNum":77,"productNumSet":[405638,342660,405636,413829,405635,405632,405519,405645,405514,405515,405641,405526,405655,405524,405652,405523,342931,405662,405534,405663,405533,342430,342942,405656,405529,405542,405541,384422,342433,342689,405539,405536,405537,342957,405550,405679,342444,405548,405547,342452,405559,405554,405680,405552,342974,381246,342341,405574,342981,344901,382916,405573,342337,405570,344897,382912,342991,382921,405576,342359,342737,346577,345178,342372,342380,342760,405623,382964,342387,405489,405502,382847,405372,405373,405626,342392,405624]}],"secondLevel":[{"id":9590,"supplierId":11773,"groupName":"上装==套装","rootId":9589,"groupPriority":"1478076721560","groupLevel":2,"gmtCreate":1478076721000,"groupId":9590,"productNum":8,"productNumSet":[342341,405574,342337,405680,405489,405502,405548,405641]},{"id":9591,"supplierId":11773,"groupName":"上装==T恤/打底衫","rootId":9589,"groupPriority":"1478076728970","groupLevel":2,"gmtCreate":1478076728000,"groupId":9591,"productNum":12,"productNumSet":[342452,405559,405623,405541,405573,405554,405539,405537,342974,405373,405533,405576]},{"id":9647,"supplierId":11773,"groupName":"上装==衬衫/马甲","rootId":9589,"groupPriority":"1478161624049","groupLevel":2,"gmtCreate":1478161624000,"groupId":9647,"productNum":8,"productNumSet":[405636,342433,405570,342931,405679,342991,342392,405624]},{"id":9648,"supplierId":11773,"groupName":"上装==卫衣/开衫","rootId":9589,"groupPriority":"1478161653086","groupLevel":2,"gmtCreate":1478161653000,"groupId":9648,"productNum":12,"productNumSet":[405655,405523,405552,405632,405489,405662,405514,342760,405515,405547,405656,405529]},{"id":9655,"supplierId":11773,"groupName":"上装==外套/风衣","rootId":9589,"groupPriority":"1478164552223","groupLevel":2,"gmtCreate":1478164552000,"groupId":9655,"productNum":31,"productNumSet":[342981,344901,405638,342660,382916,413829,382912,405635,405519,405645,382921,405526,405524,405652,342737,405534,405663,342430,342942,405542,342372,384422,405536,342957,405550,382964,342387,382847,405372,381246,405626]},{"id":9660,"supplierId":11773,"groupName":"上装==男童马甲","rootId":9589,"groupPriority":"1478165734671","groupLevel":2,"gmtCreate":1478165734000,"groupId":9660,"productNum":0,"productNumSet":[]},{"id":9662,"supplierId":11773,"groupName":"上装==男童T恤","rootId":9589,"groupPriority":"1478167149230","groupLevel":2,"gmtCreate":1478167149000,"groupId":9662,"productNum":0,"productNumSet":[]},{"id":9890,"supplierId":11773,"groupName":"上装==毛衣","rootId":9589,"groupPriority":"1478766565026","groupLevel":2,"gmtCreate":1478766565000,"groupId":9890,"productNum":7,"productNumSet":[342359,342689,344897,346577,342380,342444,345178]},{"id":11856,"supplierId":11773,"groupName":"下装==短裤","rootId":9589,"groupPriority":"1485074216790","groupLevel":2,"gmtCreate":1485074216000,"groupId":11856,"productNum":0,"productNumSet":[]},{"id":11857,"supplierId":11773,"groupName":"下装==长裤","rootId":9589,"groupPriority":"1485074217333","groupLevel":2,"gmtCreate":1485074217000,"groupId":11857,"productNum":0,"productNumSet":[]},{"id":11858,"supplierId":11773,"groupName":"下装==打底裤","rootId":9589,"groupPriority":"1485074217812","groupLevel":2,"gmtCreate":1485074217000,"groupId":11858,"productNum":0,"productNumSet":[]},{"id":11859,"supplierId":11773,"groupName":"下装==牛仔裤","rootId":9589,"groupPriority":"1485074218211","groupLevel":2,"gmtCreate":1485074218000,"groupId":11859,"productNum":0,"productNumSet":[]},{"id":11860,"supplierId":11773,"groupName":"下装==学步鞋","rootId":9589,"groupPriority":"1485074218624","groupLevel":2,"gmtCreate":1485074218000,"groupId":11860,"productNum":0,"productNumSet":[]},{"id":11861,"supplierId":11773,"groupName":"下装==单鞋","rootId":9589,"groupPriority":"1485074219027","groupLevel":2,"gmtCreate":1485074219000,"groupId":11861,"productNum":0,"productNumSet":[]},{"id":11862,"supplierId":11773,"groupName":"下装==凉鞋/沙滩鞋","rootId":9589,"groupPriority":"1485074220060","groupLevel":2,"gmtCreate":1485074220000,"groupId":11862,"productNum":0,"productNumSet":[]},{"id":11863,"supplierId":11773,"groupName":"下装==运动鞋","rootId":9589,"groupPriority":"1485074220518","groupLevel":2,"gmtCreate":1485074220000,"groupId":11863,"productNum":0,"productNumSet":[]},{"id":11864,"supplierId":11773,"groupName":"下装==布鞋","rootId":9589,"groupPriority":"1485074221029","groupLevel":2,"gmtCreate":1485074221000,"groupId":11864,"productNum":0,"productNumSet":[]}],"thirdLevel":null},{"firstLevel":[{"id":9869,"supplierId":11773,"groupName":"下装","rootId":0,"groupPriority":"1478763322103","groupLevel":1,"gmtCreate":1478763322000,"groupId":9869,"productNum":23,"productNumSet":[342757,405540,405538,405647,405551,405516,405546,344906,405654,405620,405525,405522,405682,405490,405521,405535,405660,405661,405530,405627,405560,405657,405625]}],"secondLevel":[{"id":9871,"supplierId":11773,"groupName":"短裤","rootId":9869,"groupPriority":"1478763585567","groupLevel":2,"gmtCreate":1478763585000,"groupId":9871,"productNum":1,"productNumSet":[405540]},{"id":9872,"supplierId":11773,"groupName":"长裤","rootId":9869,"groupPriority":"1478763591445","groupLevel":2,"gmtCreate":1478763591000,"groupId":9872,"productNum":13,"productNumSet":[342757,405647,405516,344906,405654,405620,405522,405682,405521,405530,405627,405560,405657]},{"id":9873,"supplierId":11773,"groupName":"打底裤","rootId":9869,"groupPriority":"1478763597276","groupLevel":2,"gmtCreate":1478763597000,"groupId":9873,"productNum":1,"productNumSet":[405625]},{"id":9874,"supplierId":11773,"groupName":"牛仔裤","rootId":9869,"groupPriority":"1478763605709","groupLevel":2,"gmtCreate":1478763605000,"groupId":9874,"productNum":8,"productNumSet":[405525,405490,405538,405535,405551,405660,405661,405546]}],"thirdLevel":null},{"firstLevel":[{"id":9870,"supplierId":11773,"groupName":"童鞋","rootId":0,"groupPriority":"1478763331702","groupLevel":1,"gmtCreate":1478763331000,"groupId":9870,"productNum":0,"productNumSet":[]}],"secondLevel":[{"id":9875,"supplierId":11773,"groupName":"学步鞋","rootId":9870,"groupPriority":"1478763642305","groupLevel":2,"gmtCreate":1478763642000,"groupId":9875,"productNum":0,"productNumSet":[]},{"id":9876,"supplierId":11773,"groupName":"单鞋","rootId":9870,"groupPriority":"1478763647479","groupLevel":2,"gmtCreate":1478763647000,"groupId":9876,"productNum":0,"productNumSet":[]},{"id":9877,"supplierId":11773,"groupName":"凉鞋/沙滩鞋","rootId":9870,"groupPriority":"1478763663833","groupLevel":2,"gmtCreate":1478763663000,"groupId":9877,"productNum":0,"productNumSet":[]},{"id":9878,"supplierId":11773,"groupName":"运动鞋","rootId":9870,"groupPriority":"1478763672128","groupLevel":2,"gmtCreate":1478763672000,"groupId":9878,"productNum":0,"productNumSet":[]},{"id":9879,"supplierId":11773,"groupName":"布鞋","rootId":9870,"groupPriority":"1478763679732","groupLevel":2,"gmtCreate":1478763679000,"groupId":9879,"productNum":0,"productNumSet":[]}],"thirdLevel":null},{"firstLevel":[{"id":9905,"supplierId":11773,"groupName":"活动商品","rootId":0,"groupPriority":"1478842738132","groupLevel":1,"gmtCreate":1478842738000,"groupId":9905,"productNum":3,"productNumSet":[346669,346812,405802]}],"secondLevel":null,"thirdLevel":null},{"firstLevel":[{"id":9880,"supplierId":11773,"groupName":"配饰","rootId":0,"groupPriority":"1485072405583","groupLevel":1,"gmtCreate":1478763729000,"groupId":9880,"productNum":0,"productNumSet":[]}],"secondLevel":[{"id":9881,"supplierId":11773,"groupName":"发饰","rootId":9880,"groupPriority":"1478763749538","groupLevel":2,"gmtCreate":1478763749000,"groupId":9881,"productNum":0,"productNumSet":[]},{"id":9882,"supplierId":11773,"groupName":"帽子","rootId":9880,"groupPriority":"1478763758929","groupLevel":2,"gmtCreate":1478763758000,"groupId":9882,"productNum":0,"productNumSet":[]},{"id":9883,"supplierId":11773,"groupName":"书包","rootId":9880,"groupPriority":"1478763778879","groupLevel":2,"gmtCreate":1478763778000,"groupId":9883,"productNum":0,"productNumSet":[]},{"id":9884,"supplierId":11773,"groupName":"手套/围巾","rootId":9880,"groupPriority":"1478763809425","groupLevel":2,"gmtCreate":1478763809000,"groupId":9884,"productNum":0,"productNumSet":[]}],"thirdLevel":null}]}},// 获取商户下的自定义分类
	apiGetBrandList: {"status":"0","result":{"productBrandList":[{"id":7195,"brandName":"Romocie/植木西","brandPriority":0,"brandLogo":"","brandRegistNumber":"","status":0},{"id":6920,"brandName":"瑾泉","brandPriority":0,"brandLogo":"","brandRegistNumber":"","status":0},{"id":7720,"brandName":"MOKA/摩卡贝贝","brandPriority":0,"brandLogo":"","brandRegistNumber":"","status":0},{"id":1321,"brandName":"BWB","brandPriority":0,"brandLogo":null,"brandRegistNumber":null,"status":0},{"id":7719,"brandName":"DATOU KIDS/大头儿子小头爸爸","brandPriority":0,"brandLogo":"","brandRegistNumber":"","status":0},{"id":2554,"brandName":"大头儿子和小头爸爸","brandPriority":0,"brandLogo":"","brandRegistNumber":"","status":0},{"id":111,"brandName":"其它","brandPriority":1,"brandLogo":null,"brandRegistNumber":null,"status":0}]}},// 获取商户下所有的品牌
	apiGetStockList: {"status":"5000"},// 获取商户下所有的商品列表
	apiGetStoreAllStock:{"status":"0","result":{"stockVoList":[],"count":0}},// 根据门店ID获取门店所有上架的商品
	brandData:[],
	categorysData:[],
	groupData:[],
	specialPromotionData:[],
	discountPromotionData:[],
}

// ============================
// 	模块的默认配置
// ============================
/* m1000：搜索 | m1001：轮播广告 | m1002：通栏广告 | m1003：两栏广告 | m1004：商品推荐
   m1005：文本 | m1006：活动导航 | m1007：品牌导航 | m1008：自定义区域 | m1009：类目导航
   m1010：类别导航 | m1011：店招 | m1012：店铺信息*/
var MODULES={
	'm1000':{
		show:true,
		orderNum:-10,
		modTplId:'m_search'
	},
	'm1001':{
		imgHeight:320,
		imgs:[],
		editTplId:'e_scroll',
		modTplId:'m_scroll'
	},
	'm1002':{
		imgUrl:'https://qncdn.qiakr.com/qk_v3/fullcolumn.png',
		linkType:'',
		linkInfo:{url:'', id:''}, //只有当linkType=0或10时，才存储url
		editTplId:'e_onecolumn',
		modTplId:'m_onecolumn'
	},
	'm1003':{
		leftImg:{
		imgUrl:'https://qncdn.qiakr.com/qk_v3/left.png',
		linkType:'',
		linkInfo:{url:'', id:''}, //只有当linkType=0或10时，才存储url
		},
		rightImg:{
			imgUrl:'https://qncdn.qiakr.com/qk_v3/right.png',
			linkType:'',
			linkInfo:{url:'', id:''}, //只有当linkType=0或10时，才存储url
		},
		editTplId:'e_twocolumn',
		modTplId:'m_twocolumn'
	},
	'm1004':{
		hasTitle:true,
		autoRecommend:true,//是否自动推荐
		autoPms:{ //自动: 查询参数
			keywords:'',
			limitNum:10,
			showListByBrand:false,  //是否按品牌展示列表
			showListType:'category', // category类目、brand品牌、new新品、offer特价、group自定义分类
			showListTypeId:'',
			showListTypeInfo:[],   //选择 按类目或按品牌 的选择信息
			orderTypeNum:0
		},
		productInfoAuto:[{ //自动推荐的商品信息（根据配置异步获取后生成，用于渲染数据）
			titleInfo:{id:0, name:''},
			proInfo:[]
		}],
		productInfo:{ //手动推荐的商品信息 (在配置时保存)
			titleInfo:{name:'店主精选'},
			proInfo:[]
		},
		editTplId:'e_recommend',
		modTplId:'m_recommend'
	},
	'm1005':{
		text:'',
		editTplId:'e_text',
		modTplId:'m_text'
	},
	'm1006':{
		hasMiaosha:true,
		hasHongbao:true,
		hasNewhot:true,
		appointment:false,
		hasCoupon:true,
		hasClass:false,
		hasSign:false,
		hasExchange:false,
		editTplId:'e_activityNav',
		modTplId:'m_activityNav'
	},
	'm1007':{
		title:'',
		brands:[],
		editTplId:'e_brandNav',
		modTplId:'m_brandNav'
	},
	'm1008':{
		htmlStr:'',
		editTplId:'e_custom',
		modTplId:'m_custom'
	},
	'm1009':{
		title:'',
		categorys:[],
		editTplId:'e_categoryNav',
		modTplId:'m_categoryNav',
	},
	'm1010':{
		title:'',
		groups:[],
		editTplId:'e_groupNav',
		modTplId:'m_groupNav',
	},
	'm1011':{
		img:'',
		url:'',
		show:true,
		modTplId:'m_banner',
		orderNum:-9,
	},
	'm1012':{
		logoImg:'',
		shopName:'',
		show:true,
		modTplId:'m_info',
		orderNum:-8,
	}
};
	
	
var
	m_editeBox,	//模板编辑
	m_phoneBox,	//手机预览
	page;	//页面主逻辑
	
	
	page = {
	init:function(confData){
		console.log("dsfdas");
		var dfr = $.Deferred();
		var self = this;
//		var tplId = $model.params.templateId;
        
		this.dragSortEv();
		this.linkSltEv();
		m_editeBox.init();
		m_phoneBox.init();

//		tplId && this.createQrCode(suid, tplId || '', $model.params.storeId || '');

		$.when(this.initDEF_CONF()).done(function(){
			self.initView.bind(self)(confData);
			dfr.resolve();
		}).fail(function(){
			toastr.error('装修数据初始化失败！');
			dfr.reject();
		});
		return dfr;
	},
	initDEF_CONF:function(){ /*初始化默认数据*/
		// 获取 品牌、类目、自定义类别、专题、满减满折
		var dtd = $.Deferred();
		$.when(
			$.ajax({url:PAGE_CONF.apiGetBrandList}),
			$.ajax({url:PAGE_CONF.apiGetCategoryList}),
			$.ajax({url:PAGE_CONF.apiGetSpecialPromotion}),
			$.ajax({url:PAGE_CONF.apiGetDiscountPromotion}),
			$.ajax({url:PAGE_CONF.apiGetSelfGroupList}),
			$.ajax({url:PAGE_CONF.apiGetScratchPromotion}),
			$.ajax({url:PAGE_CONF.apiGetWheelPromotion}))
		.done(function(d1, d2, d3, d4, d5, d6, d7){
			d1 = d1[0]; d2 = d2[0]; d3 = d3[0]; d4=d4[0]; d5=d5[0]; d6=d6[0]; d7=d7[0];
			if((d1.status - d2.status - d3.status - d4.status - d5.status - d6.status - d7.status)!==0){
				toastr.error('数据初始化失败！');
				return false;
			}

			PAGE_CONF.brandData = d1.result.productBrandList;
			PAGE_CONF.categorysData = d2.result.categoryFamilyVoList;
			PAGE_CONF.groupData = d5.result.groupList;
			d3 = d3.result.specialPromotionList;
			d4 = d4.result.discountPromotionVoList;
			d6 = d6.result.luckyDrawList;
			d7 = d7.result.luckyDrawList;

			PAGE_CONF.specialPromotionData = (d3 && d3.length)?d3.map(function(v,i){ return '<option value="'+v.id+'">'+v.name+'</option>';}).join(''):'<option value="-1">暂无此类活动</option>';
			PAGE_CONF.discountPromotionData = (d4 && d4.length)?d4.map(function(v,i){ return '<option value="'+v.id+'">'+v.promotionName+'</option>';}).join(''):'<option value="-1">暂无此类活动</option>';
			PAGE_CONF.scratchPromotionData = (d6 && d6.length)?d6.map(function(v,i){ return '<option value="'+v.id+'">'+v.luckyDrawTitle+'</option>';}).join(''):'<option value="-1">暂无此类活动</option>';
			PAGE_CONF.wheelPromotionData = (d7 && d7.length)?d7.map(function(v,i){ return '<option value="'+v.id+'">'+v.luckyDrawTitle+'</option>';}).join(''):'<option value="-1">暂无此类活动</option>';

			var categoryArr =  PAGE_CONF.categorysData.map(function(v, i){ return {id:v.id, name:v.categoryFamily.familyName}; });

			DEF_CONF['m1004'].autoPms.showListTypeInfo = categoryArr
			DEF_CONF['m1004'].brandData = PAGE_CONF.brandData;
			DEF_CONF['m1004'].categorysData = PAGE_CONF.categorysData;

			dtd.resolve();
		})
		.fail(function(){
			dtd.reject();
		});

		return dtd;
	},
	dragSortEv:function(){ /*初始化拖动和排序*/
		$( "#moduleList .ui-draggable" ).draggable({
			containment:'#dragWrap',
			connectToSortable: "#shopview",
			helper: "clone",
			revert: "invalid",
			start:function(){ isDragToReplace = true; },
			stop:function(){ isDragToReplace = false; }
		});
		$( "#shopview" ).sortable({
			items: ".sortable-item,#wx_mod_replace",
			cancel: ".ui-state-disabled",
			placeholder: "ui-state-highlight",
			revert: false,
			axis: "y",
			stop:function(e, ui){
				m_editeBox.refreshOrderNum4Mod();
				if(!isDragToReplace){
					toastr.warning('模块位置发生了变化，请注意保存装修！');
					return;
				}

				// 拿到模块原始ID
			  	var mid = ui.item.context.getAttribute('moduleid');
			  	var $newMod = $('#shopview').find('.mod_item');

			  	var emptyStr='';
			  	switch(mid){
					case 'm1007':
						emptyStr = PAGE_CONF.brandData.length==0 ? '品牌':'';
						break;
					case 'm1009':
						emptyStr = PAGE_CONF.categorysData.length==0 ? '分类':'';
						break;
					case 'm1010':
						emptyStr = PAGE_CONF.groupData.length==0 ? '分类':'';
						break;
				}
				if(emptyStr){
					toastr.warning('暂无 '+emptyStr+' 数据！');
					return;
				}
			  	// 生成新的模块ID
			  	var newId = (new Date()).getTime().toString(16).substring(7);
			  	var data = MODULES['m'+mid];
				  	data.mid ='m'+mid+'-'+newId;
				  	data.meid ='me'+mid+'-'+newId;

			  	// 创建模块到预览
		  		$newMod.replaceWith(template(data.modTplId, data));
		  		m_phoneBox.showMask(data.mid);

		  		if(mid === '1004'){
		  			data.brandData = DEF_CONF['m1004'].brandData;
		  			data.categorysData = DEF_CONF['m1004'].autoPms.showListTypeInfo;
		  		}

	  			// 显示编辑界面
			  	m_editeBox.show(data);
			}
		});

		$("#shopview").disableSelection();
	},
	initView:function(confData){ /*初始化界面*/
		// 获取装修信息 如果有，则使用 如果没有，则使用默认
		var self = this, o = this.o;

		RES_CONF = confData || $.extend(true,{},DEF_CONF);

		// 兼容老的装修配置 (判断是否有version, 没有，则默认添加店头的三个模块)
		// 移动端渲染时，如果没有version，则显示新的店头3模块
		if( typeof RES_CONF.version === 'undefined' || typeof RES_CONF['m1000'] == 'undefined'){
			RES_CONF['m1000'] = $.extend(true,{},DEF_CONF['m1000']);
			RES_CONF['m1011'] = $.extend(true,{},DEF_CONF['m1011']);
			RES_CONF['m1012'] = $.extend(true,{},DEF_CONF['m1012']);
		}

		self.renderConf(RES_CONF);

		$('.ui_mask_wrapper').show();
	},
	renderConf:function(shopConf){ /*使用配置渲染到手机预览*/
		var arrConf=[], self = this;
    	for(var i in shopConf){
    		if(i!='version'){
	    		shopConf[i].mid=i;
	    		arrConf.push(shopConf[i]);
    		}
    	}
		var arrConf = arrConf.sort(function(a,b){
			return a.orderNum-b.orderNum;
		});

		var strArr=[];

		while(arrConf.length){
			oMod = arrConf.shift();
			var modId = oMod['mid'].split('-')[0];

			switch(modId){
				case 'm1000': case 'm1011': case 'm1012':
					$('#chkViewBox input[value="'+modId+'"]').prop('checked',oMod.show);
					oMod.store = STORE_INFO ? STORE_INFO : DEF_STORE_INFO;
					oMod.store.picture = !oMod.store.picture ? DEFAULT_STORE.picture : oMod.store.picture;
					oMod.store.picture = Utils.QNCropSuffix(oMod.store.picture, 320, 120);
					oMod.store.logo = Utils.QNCropSuffix(oMod.store.logo, 44, 44);
					oMod.show && (oMod.isShow=true);
					break;
				case 'm1001':// 轮播
					if(oMod.imgs.length>1){
						oMod.imgs.sort(function(a, b){ return a.orderNum-b.orderNum});
						(function(mid){
							setTimeout(function(){
								var $mBox = $('#'+mid);
								if($mBox.find('.swiper-wrapper a').length>1){
									new Swiper($mBox.find('.swiper-container')[0], {
									   pagination: $mBox.find('.swiper-pagination'),
								       autoplayDisableOnInteraction:false,
								       autoplay: 3000
								    });
								}
							}, 200);
						})(oMod.mid);
					}
					break;
				case 'm1004'://商品
					(function(data){ setTimeout(function(){self.creatProList(data);}, 500); })(oMod)
					break;
				case 'm1007'://品牌
					oMod.brands.sort(function(a, b){ return a.orderNum-b.orderNum});
					break;
				case 'm1009'://类目
					oMod.categorys.sort(function(a, b){ return a.orderNum-b.orderNum});
					break;
				case 'm1010'://类别
					oMod.groups.sort(function(a, b){ return a.orderNum-b.orderNum});
					break;
			}

			strArr.push(template(MODULES[modId].modTplId, oMod));
		}

		$('#wx_mod_replace').before(strArr.join(''));
		$('#shopview .sortable-item').length == 0 &&  $('#wx_mod_replace').show();
	},
	creatProList:function(proConfData){ /*获取商品信息并渲染*/
		if(proConfData.autoRecommend){ //自动推荐 异步请求数据
			var pms = {
				status: 0,
				index: 0,
				length: proConfData.autoPms.limitNum,
				fuzzyName: proConfData.autoPms.keywords,
				orderName: ORDER_DIC[proConfData.autoPms.orderTypeNum].name,
				orderType: ORDER_DIC[proConfData.autoPms.orderTypeNum].type,
				storeId: STORE_INFO && STORE_INFO.id || '',
				supplyTypeList: '1_3'
			};

			var typesData = JSON.parse(JSON.stringify(proConfData.autoPms.showListTypeInfo)),
				dtd=null,
				productInfoAuto=[];

			$('#shopview').find('.m_recommend_bd'+proConfData.mid).html('');

			function getProListByType(showListType){
				dtd = $.Deferred();
				if(!typesData.length){
					dtd.resolve();
					return dtd;
				}
				var getProsDataByType = function(id){
					switch(showListType){
						case 'category': pms.categoryFamilyIds = id; break;
						case 'brand': pms.brandId = id; break;
						case 'group': pms.groupId = id; break;
						case 'new':
						case 'offer':
							pms.tags = proConfData.autoPms.showListTypeInfo[0].name; break;
					}
					window['ajax-queryAllocatedSupplierStock'] = false;
					return $.post(PAGE_CONF.apiGetStockList, pms);
				}

				// 循环获取所有商品信息并缓存
				typesData= typesData.slice(0,3);
				function prosessData(){
					var curr = typesData.shift();
					if(typeof curr !== 'undefined'){
						getProsDataByType(curr.id)
						.done(function(data, a, b){
							productInfoAuto = [];
							if(data.status === '0'){
								var stockList = data.result.stockVoList, price=0;
								if(!curr.id) curr.id = 'r'+Math.random().toString(16).substring(5);
								productInfoAuto['F'+curr.id]={
									titleInfo: {id:curr.id, name:curr.name},
									proInfo: []
								};
								for(var y in stockList){
									productInfoAuto['F'+curr.id].proInfo.push({
										proid: stockList[y].stock.productId,
										proname: stockList[y].stock.productName,
										proimg: stockList[y].stock.productPicUrl,
										proprice: stockList[y].minSkuPrice,
										tagprice: stockList[y].stock.tagPrice,
										stockid: stockList[y].stock.id,
										tags: stockList[y].productSupplier.tags||''
									});
								}

								var arrPro=[];
						    	for(var i in productInfoAuto){
						    		arrPro.push(productInfoAuto[i]);
						    	}
						    	$('#shopview').find('.m_recommend_bd'+proConfData.mid).append(template('proListTpl',{data:arrPro}));
							}else{
								dtd.resolve();
							}
							prosessData();
						})
						.fail(function(){
							dtd.resolve();
						});
					}else{
						dtd.resolve(productInfoAuto);
					}
				}
				prosessData();
				return dtd;
			}
			// 将所有商品信息 渲染并显示
			getProListByType(proConfData.autoPms.showListType);
		}else{ //手动推荐
			proConfData.productInfo.proInfo  = proConfData.productInfo.proInfo.sort(function(a, b){ return a.ordernum - b.ordernum;});
			$('#shopview').find('.m_recommend_bd'+proConfData.mid).html(template('proListTpl',{data:[proConfData.productInfo]}));
		}
	},
	linkSltEv:function(){ /*选择链接*/
		// 选择链接 事件
		$('#editWrap').on('change', '[name="imgLinkType"]', function(){
			var $this = $(this);
			var $td = $this.parent().parent();
			var val = ~~$this.val();
			var $sSlt = $td.find('[name="specialPromotionLink"]');
			var $dSlt = $td.find('[name="discountPromotionLink"]');
			var $gSlt = $td.find('[name="scratchPromotionLink"]');
			var $wSlt = $td.find('[name="wheelPromotionLink"]');
			var $cIpt = $td.find('[name="customerLinkUrl"]');

			if(val === 0 || val === 10 || val===13 || val===17 || val===18){
				if(val == 10){
					$sSlt.show().siblings().not('.select2-container').not('[name="imgLinkType"]').hide();
					$sSlt.html()=='' &&  $sSlt.html(PAGE_CONF.specialPromotionData);
					$sSlt.data('id') !== '' && $sSlt.val($sSlt.data('id')).trigger('change');
				}else if(val===13){
					$dSlt.show().siblings().not('.select2-container').not('[name="imgLinkType"]').hide();
					$dSlt.html()=='' && $dSlt.html(PAGE_CONF.discountPromotionData);
					$dSlt.data('id') !== '' && $dSlt.val($dSlt.data('id')).trigger('change');
				}else if(val===17){
					$gSlt.show().siblings().not('.select2-container').not('[name="imgLinkType"]').hide();
					$gSlt.html()=='' && $gSlt.html(PAGE_CONF.scratchPromotionData);
					$gSlt.data('id') !== '' && $gSlt.val($gSlt.data('id')).trigger('change');
				}else if(val===18){
					$wSlt.show().siblings().not('.select2-container').not('[name="imgLinkType"]').hide();
					$wSlt.html()=='' && $wSlt.html(PAGE_CONF.wheelPromotionData);
					$wSlt.data('id') !== '' && $wSlt.val($wSlt.data('id')).trigger('change');
				}else{
					$cIpt.show().siblings().not('.select2-container').not('[name="imgLinkType"]').hide();
				}
			}else{
				$this.siblings().not('.select2-container').not('[name="imgLinkType"]').hide();
			}
		}).on('change', '[name="specialPromotionLink"]', function(){
			$(this).data('id',$(this).val());
		}).on('change', '[name="discountPromotionLink"]', function(){
			$(this).data('id',$(this).val());
		}).on('change', '[name="scratchPromotionLink"]', function(){
			$(this).data('id',$(this).val());
		}).on('change', '[name="wheelPromotionLink"]', function(){
			$(this).data('id',$(this).val());
		});
	},
//	createQrCode:function(suid, tplId, storeId){ /*生成二维码预览*/
//		$('#QrCodeImg').html('');
//		var qrcode = new QRCode(document.getElementById("QrCodeImg"), {
//	         width : 120,
//	         height : 120
//	    });
//	    qrcode.makeCode(location.protocol+"//"+location.host+'/mall/getStoreHomePage.htm?supplierId='+suid+'&templateId='+tplId+'&storeId='+storeId);
//	    $('#shopPreView').fadeIn();
//	}
};
	
	// 模块  编辑界面相关操作
m_editeBox={
	init:function(){
		this.viewChkEv();
		this.previewEv();
		this.cancelEv();
	},
	viewChkEv:function(){
		$('#chkViewBox').on('change','input',function(){
			var mid = $(this).val(), isShow = $(this).prop('checked');
			$('#'+mid)[isShow?'fadeIn':'hide']();
			RES_CONF[mid].show = isShow;
		});
	},
	getModDom:function(data){ /*获取编辑模块的DOM*/
		// 判断是否已经存在，存在：返回 ，不存在：创建
		var meid = data.meid;
		var mDom = $('#'+meid);

		// 商品、品牌、类目、类别在编辑时，添加下拉数据
		switch(data.mid.split('-')[0]){
			case 'm1007': data.brandData = PAGE_CONF.brandData; break;
			case 'm1009': data.categorysData = PAGE_CONF.categorysData; break;
			case 'm1010': data.groupData = PAGE_CONF.groupData; break;
			case 'm1004':
				data.brandData = PAGE_CONF.brandData;
				data.groupData = PAGE_CONF.groupData.map(function(v){ return v.firstLevel[0]});
				data.categorysData = DEF_CONF['m1004'].autoPms.showListTypeInfo;
				break;
		}

		if(mDom.length){
			$('#'+meid).replaceWith(template(data.editTplId, data));
		}else{
			$('#editWrap').append(template(data.editTplId, data));
		}
		this.initCompents2EditeMod(meid);
	 	return $('#'+meid);
	},
	initCompents2EditeMod:function(meid){ /*初始化编辑界面的组件*/
		var self = this;
		var $modEl = $('#'+meid);
		switch(meid.split('-')[0].substring(2)){
			case '1000': //店招
				$('#headLogoUploader').fileUploader();
				$('#headBgimgUploader').fileUploader({
					// 缩略图
					thumbW:320,
					thumbH:160,
					// 压缩
					compressW:640,
					compressH:320
				});
				break;
			case '1001': //轮播广告
				var $tipH = $('#carousel-tips-height'+meid);

				// 注册选择高度事件
				$('#carouselImgHheightSelect'+meid).on('click', 'input', function(){
					$tipH.html($(this).val());
				});

				// 注册广告列表删除事件
				$('#carouselUploaderBox'+meid).on('click', '.icon_delete', function(){
					$(this).closest('.carousel_item').remove();
				});

				// 上传组件
				$('#carouselUploaderBox'+meid).fileUploader({
					fileQueuedEv:false,
					uploadStartEv:false,
					uploadProgressEv:false,
					uploadSuccessEv:function(file, response){
						var max=0, eachNum=0, data;
						$('#carouselUploaderBox'+meid+' .carousel_item_num').each(function(){
							eachNum = ~~$(this).val();
							if(eachNum>max){
								max = eachNum;
							}
						});
						data = {
							url:'https://qncdn.qiakr.com/'+response.hash,
							num: max+1
						};
						$('#carouselListTbd'+meid).append(template.compile('<tr data-tag="item" class="carousel_item">\
                            <td data-tag="item-i"><input type="number" class="carousel_item_num" name="orderNum"  value="{{num}}"></td>\
                            <td>\
                                <div class="uploaded" style="margin:10px 0">\
                                    <img src="{{url}}" width="94" height="54" data-tag="item-img" />\
                                </div>\
                            </td>\
                            <td class="tal">\
                            </td>\
                            <td>\
                                <a href="javascript:;" class="icon_delete" title="删除" >删除</a>\
                            </td>\
                        </tr>')(data));

                        $('#carouselListTbd'+meid+' .carousel_item:last').find('.tal').html($('#cpSltBox').html());
                        $('#mainwrapper').height($('#editWrap').height()+100);
					},
				});

				setTimeout(function(){
					$modEl.find('[name="imgLinkType"]').trigger('change');
				}, 500);

				break;
			case '1002': //通栏广告
				$('#onecolumnUploader'+meid).fileUploader({
					// 缩略图
					thumbW:320,
					thumbH:160,
					// 压缩
					compressW:640,
					compressH:320
				});
				setTimeout(function(){
					$modEl.find('[name="imgLinkType"]').trigger('change');
				}, 500);

				$modEl.find('[name="imgLinkType"]').select2({minimumResultsForSearch: Infinity});
				break;
			case '1003': //两栏广告
				$('#twocolumnRightUploader'+meid+',#twocolumnLeftUploader'+meid).fileUploader();
				setTimeout(function(){
					$modEl.find('[name="imgLinkType"]').trigger('change');
				}, 500);

				$modEl.find('[name="imgLinkType"]').select2({minimumResultsForSearch: Infinity});
				break;
			case '1004': //商品
				var pms;

				$('#recommendWay'+meid).on('click', 'input', function(){
					if(this.value=='auto'){
						$('#autoRecSettings'+meid).removeClass('hide');
						$('#handleRecSettings'+meid).addClass('hide');
					}else{
						$('#autoRecSettings'+meid).addClass('hide');
						$('#handleRecSettings'+meid).removeClass('hide');
					}
					$('#mainwrapper').height($('#editWrap').height()+100);
				});

				// 切换
				$('#sltShowType'+meid).on('click', 'input', function(){
					if(this.value=='category') $('#sltCategory'+meid).removeClass('hide').siblings().addClass('hide');
					if(this.value=='brand') $('#sltBrand'+meid).removeClass('hide').siblings().addClass('hide');
					if(this.value=='group') $('#sltGroup'+meid).removeClass('hide').siblings().addClass('hide');
					if(this.value=='new' || this.value=='offer') $('#sltBrand'+meid+', #sltCategory'+meid+ ', #sltGroup'+meid).addClass('hide');
				});

				// 搜索
				$('#searchPros'+meid).on('click',function(){ loadProListData(); });

				function loadProListData(){
					pms= {
						index:0,
						length:10,
						fuzzyName:$('#keyword'+meid).val().trim(),
						supplyTypeList:'1_3',
						status:'0',
						sourceType:'',
						dist:''
					}
					var url = 'queryAllocatedSupplierStock.json';
					$.post(url, pms)
					.done(function(data){
						// 成功
						var count = data.result.count;
						var listData = data.result.stockVoList;
						var $tbodyBox = $('#proRecTbd'+meid);
						var $navBox = $('#navgation'+meid);

						if(!listData.length){
						    $tbodyBox.html('<tr><td class="tbl-placeholder" colspan="2">暂无商品信息！</td></tr>');
						    $navBox.html('');
						    return false;
						}

						// 调用模板，渲染数据
						$tbodyBox.html(template('stockListTpl', {res:listData}));

						// 显示分页导航
						var totalP = Math.ceil(count/pms.length);
						if(totalP<=1) {
							$navBox.html('');
							return false;
						}
						$navBox.pagination({
							totalData:count,
							showData:pms.length,
							coping:false,
							count:2,
							callback:function(i){
								pms.index = (i-1)*pms.length;
								$.post(url, pms)
								.done(function(data){
									$('#proRecTbd'+meid).html(template('stockListTpl', {res:data.result.stockVoList}));
								});
							}
						});

					});
				}
				loadProListData();

				// 推荐
				$('#proRecTbd'+meid).on('click', '.add-rec', function(){
					var $this = $(this), $recRight = $('#proRecResTbd'+meid);
					if($this.hasClass('recommended')) return false;
					if($recRight.find('tr').length==10){
						toastr.warning('添加的商品数量已达上限！');
						return false;
					}
					if($recRight.find('#p-'+$this.data('id')).length){
						toastr.warning('请勿重复添加此商品！');
						return false;
					}

					$this.addClass('recommended').text('已添加');
					var data = $this.data();
					var str = [], maxNums=[], max=0;

					// 获取最大排序值
					$recRight.find('input').each(function(){
						if(~~this.value>max) max = ~~this.value;
					});

					str.push('<tr id="p-'+data.id+'" data-proid="'+data.id+'" data-stockid="'+data.stockid+'" data-proname="'+data.name+'" data-proimg="'+data.picurl+'" data-proprice="'+data.price+'" data-ordernum="'+(max+1)+'" data-tagprice="'+(data.tagprice || '0')+'"><td><input type="number" value="'+(max+1)+'" class="number-default"></td><td>');
					str.push('<span class="img" style="background-image:url('+(data.picurl||'https://qncdn.qiakr.com/qk_v3/no_pro_img.gif')+')"></span><div>');
					str.push('<p class="name">'+data.name+'</p><p class="price">￥'+avalon.filters.number(data.price, 2)+'</p>');
					str.push('</div></td><td><a href="javascript:;" class="del-rec">取消</a></td></tr>');

					$recRight.append(str.join(''));
					countNum();
				});

				// 取消推荐
				$('#proRecResTbd'+meid).on('click', '.del-rec', function(){
					var $tr = $(this).closest('tr');
					$('#tr-'+$tr.attr('id').split('-')[1]).find('.add-rec').removeClass('recommended').text('添加');
					$tr.fadeOut(300, function(){
						$(this).remove();
						countNum();
					})
				})

				$('#proRecResTbd'+meid).on('change', '.number-default', function(){
					var $this = $(this);
					$this.closest('tr').data('ordernum', $this.val());
				});

				// 计算可推荐数量
				function countNum(){
					var len = $('#proRecResTbd'+meid).find('tr').length, $box = $('#handleRecSettings'+meid);
					if(len<=10){
						$box.find('.remainRec').text(10-len);
						$box.find('.selectedRec').text(len);
					}
				}

				break;
			case '1005': //文字
				// 初始化字数限制组件
				$('#textModContent'+meid).charcount({ maxLength: 500, position:'after', preventOverage: true });
				break;
			case '1007': //品牌
				// 注册列表删除事件
				$('#brandnavigationUploader'+meid).on('click', '.icon_delete', function(){
					$(this).closest('.brandnavigation_item').remove();
				});

				$('#'+meid).find('[name="modTitle"]').charcount({ maxLength: 8, position:'after', preventOverage: true });

				$('#brandnavigationUploader'+meid).fileUploader({
					fileQueuedEv:false,
					uploadStartEv:false,
					uploadProgressEv:false,
					uploadSuccessEv:function(file, response){
						var max=0, eachNum=0, data;
						$('#brandnavigationUploader'+meid+' .brand_item_num').each(function(){
							eachNum = ~~$(this).val();
							if(eachNum>max){
								max = eachNum;
							}
						});

						data = {
							url:'https://qncdn.qiakr.com/'+response.hash,
							num: max+1,
							brands:PAGE_CONF.brandData
						};

						$('#brandListTbd'+meid).append(template('brandListTpl',data));
						$('#mainwrapper').height($('#editWrap').height()+100);
					},
				});
				break;
			case '1008': //自定义
				
			    cusEditor = UE.getEditor('customEditor'+meid,{

				        initialFrameHeight:300,
				        initialFrameWidth:600,

					});
				break;
			case '1009': //类目导航
				var $categorySlt = $('#categoryListTbl'+meid).find(".category_select");
			 	$('#categoryListTbl'+meid).find(".category_select").select2({minimumResultsForSearch: Infinity});
			 	$('#'+meid).find('[name="modTitle"]').charcount({ maxLength: 8, position:'after', preventOverage: true });
				// 注册列表删除事件
				$('#categoryNavUploader'+meid).on('click', '.icon_delete', function(){
					$(this).closest('.categoryNav_item').remove();
				});

				$('#categoryNavUploader'+meid).fileUploader({
					fileQueuedEv:false,
					uploadStartEv:false,
					uploadProgressEv:false,
					uploadSuccessEv:function(file, response){
						var max=0, eachNum=0, data;
						$('#categoryNavUploader'+meid+' .brand_item_num').each(function(){
							eachNum = ~~$(this).val();
							if(eachNum>max){
								max = eachNum;
							}
						});
						data = {
							url:GLOBAL_CONFIG.cdn+response.hash,
							num: max+1,
							categorys:PAGE_CONF.categorysData
						};

						var $newTr = $(template('categoryListTpl', data)).appendTo('#categoryListTbl'+meid);
	                    $newTr.find(".category_select").select2();
	                    $('#mainwrapper').height($('#editWrap').height()+100);
					},
				});
				break;
			case '1010': //自定义类别
				// 注册列表删除事件
				$('#groupNavUploader'+meid).on('click', '.icon_delete', function(){
					$(this).closest('.groupNav_item').remove();
				});
				$('#'+meid).find('[name="modTitle"]').charcount({ maxLength: 8, position:'after', preventOverage: true });
				$('#groupListTbl'+meid).find(".group_select")
				.select2({minimumResultsForSearch: Infinity})
				.on('change',function(){
                	$(this).closest('tr').find('[name="groupThemeName"]').val($(this).select2('data').text);
                });

				$('#groupNavUploader'+meid).fileUploader({
					fileQueuedEv:false,
					uploadStartEv:false,
					uploadProgressEv:false,
					uploadSuccessEv:function(file, response){
						var max=0, eachNum=0, data;
						$('#groupNavUploader'+meid+' .brand_item_num').each(function(){
							eachNum = ~~$(this).val();
							if(eachNum>max){
								max = eachNum;
							}
						});

						data = {
							url:GLOBAL_CONFIG.cdn+response.hash,
							num: max+1,
							groupOpt:template('groupOptTpl',{data:PAGE_CONF.groupData})
						};

						var $newTr = $(template('groupListTpl', data)).appendTo('#groupListTbl'+meid);

						$newTr.find(".group_select")
						.select2({minimumResultsForSearch: Infinity})
	                    .on('change',function(){
	                    	$(this).closest('tr').find('[name="groupThemeName"]').val($(this).select2('data').text);
	                    })
	                    .trigger('change');

	                    $('#mainwrapper').height($('#editWrap').height()+100);
					},
				});
				break;
		}
		page.linkSltEv();
	},
	show:function(data){ /*显示界面*/
		$('#editWrap').fadeIn();
		var d = this.getModDom(data);
		d.addClass('active');
		setTimeout(function(){$('#mainwrapper').height($('#editWrap').height()+100);}, 500)
	},
	hide:function(){ /*隐藏界面*/
		$('.ui_dialog_wrapper.active').removeClass('active');
		$('#editWrap').fadeOut();
	},
	previewEv:function(){ /*预览*/
		var self = this,o = this.o;
		$('#editWrap').on('click','[data-tag="save"]', function(){
			var meid = $(this).data('id');
			var mid = 'm'+meid.substring(2);
			var $pbox = $('#'+meid);

			var modID = meid.split('-')[0].replace('e','');
			var modData = {};

			switch(modID){
				case 'm1001': //轮播广告
					var $cItems = $('#carouselListTbd'+meid+' tr'), imgs=[];
					if($cItems.length){
						$cItems.each(function(){
							var $this = $(this);
							var imgLinkType=$this.find('[name="imgLinkType"]').val();
							var tData = {
								orderNum: ~~$this.find('[name="orderNum"]').val(),
								imgUrl: $this.find('img').attr('src'),
								linkType: imgLinkType
							}
							tData.linkInfo = self.getLinkInfoByLinkType(imgLinkType, $this);
							imgs.push(tData);
						});

						for(var i in imgs){
							if(!(Reg_URL.test(imgs[i].linkInfo.url)) && imgs[i].linkType==='0'){
								toastr.warning('请输入正确的链接地址！');
								return false;
							}
						}
					}else{
						toastr.warning('请至少上传一张广告图片！');
						return false;
					}

					if(imgs.length>5){
						toastr.warning('设置的图片数量不能大于5张！');
						return false;
					}

					modData={
						imgHeight:$pbox.find('[name="imgHeight"]:checked').val(),
						imgs:imgs,
					}
					break;
				case 'm1002': //通栏广告
					var imgLinkType = $pbox.find('[name="imgLinkType"]').val();
					modData = {
						imgUrl: $pbox.find('[name="imgUrl"]').val().trim(),
						linkType: imgLinkType
					}
					modData.linkInfo = self.getLinkInfoByLinkType(imgLinkType, $pbox);

					if(modData.imgUrl=='' || modData.imgUrl == 'https://qncdn.qiakr.com/qk_v3/fullcolumn.png'){
						toastr.warning('请至少上传一张广告图片！');
						return false;
					}

					if(!(Reg_URL.test(modData.linkInfo.url)) && modData.linkType==='0'){
						toastr.warning('请输入正确的链接地址！');
						return false;
					}
					break;
				case 'm1003': //两栏广告
					modData={
						leftImg:{
							imgUrl:$pbox.find('[name="leftImgUrl"]').val().trim(),
						},
						rightImg:{
							imgUrl:$pbox.find('[name="rightImgUrl"]').val().trim(),
						},
					}
					var $linkL = $('.twocolumn-link'+meid+':first');
					var $linkR = $('.twocolumn-link'+meid+':last');
					var linkTypeL = $linkL.find('[name="imgLinkType"]').val();
					var linkTypeR = $linkR.find('[name="imgLinkType"]').val();

					modData.leftImg.linkType = linkTypeL;
					modData.rightImg.linkType = linkTypeR;

					modData.leftImg.linkInfo = self.getLinkInfoByLinkType(linkTypeL, $linkL);
					modData.rightImg.linkInfo = self.getLinkInfoByLinkType(linkTypeR, $linkR);
					if(modData.leftImg.imgUrl=='' || modData.rightImg.imgUrl=='' || modData.leftImg.imgUrl=='https://qncdn.qiakr.com/qk_v3/left.png' || modData.rightImg.imgUrl=='https://qncdn.qiakr.com/qk_v3/right.png' ){
						toastr.warning('广告图片不能为空！');
						return false;
					}

					if((!(Reg_URL.test(modData.leftImg.linkInfo.url)) && modData.leftImg.linkType==='0')|| (!(Reg_URL.test(modData.rightImg.linkInfo.url)) && modData.rightImg.linkType==='0') ){
						toastr.warning('请输入正确的链接地址！');
						return false;
					}
					break;
				case 'm1004': //商品
					// 判断是自动还是手动推荐
					var isAutoRec = $pbox.find('[name="autoRecommend"]:checked').val() =='auto'?true:false;

					modData = {
						hasTitle: $pbox.find('[name="hasTitle"]').prop('checked'),
						autoRecommend: isAutoRec,
						hasMargin: true,
						hasMoreLink: $pbox.find('[name="hasTitle"]').prop('checked')
					}

					if(isAutoRec){
						var $brandSlt = $('#sltBrand'+meid),
							brandVal = $brandSlt.find(':selected').val(),
							brandTxt = $brandSlt.find(':selected').text();

						var $categorySlt = $('#sltCategory'+meid),
							categoryVal = $categorySlt.find(':selected').val(),
							categoryTxt = $categorySlt.find(':selected').text();

							var $groupSlt = $('#sltGroup'+meid),
								groupVal = $groupSlt.find(':selected').val(),
								groupTxt = $groupSlt.find(':selected').text();

						var showListType = $('#sltShowType'+meid).find('[name="showListType"]:checked').val();
						var orderInfo = $pbox.find('[name="orderType"]').val().split('-');
						modData.autoPms={
							showListType:showListType,
							showListTypeId:'',
							showListTypeInfo:[],
							keywords: $pbox.find('[name="keywords"]').val().trim(),
							limitNum: $pbox.find('[name="limitNum"]').val(),
							orderTypeNum: $pbox.find('[name="orderType"]').val()
						}

						switch(showListType){
							case 'category':
								if(categoryVal==""){
									$categorySlt.children().each(function(){
										var $this = $(this);
										$this.val() != '' && modData.autoPms.showListTypeInfo.push({id:$this.val(), name:$this.text()});
									});
								}else{
									modData.autoPms.showListTypeInfo.push({id:categoryVal, name:categoryTxt});
								}
								modData.autoPms.showListTypeId = categoryVal;
								break;
							case 'brand':
								if(brandVal==""){
									$brandSlt.children().each(function(){
										var $this = $(this);
										$this.val() != '' && modData.autoPms.showListTypeInfo.push({id:$this.val(), name:$this.text()});
									});
								}else{
									modData.autoPms.showListTypeInfo.push({id:brandVal, name:brandTxt});
								}
								modData.autoPms.showListTypeId = brandVal;
								break;
							case 'new':
								modData.autoPms.showListTypeInfo.push({name:'新品'});
								break;
							case 'offer':
								modData.autoPms.showListTypeInfo.push({name:'特价'});
								break;
							case 'group':
								if(groupVal==""){
									$groupSlt.children().each(function(){
										var $this = $(this);
										$this.val() != '' && modData.autoPms.showListTypeInfo.push({id:$this.val(), name:$this.text()});
									});
								}else{
									modData.autoPms.showListTypeInfo.push({id:groupVal, name:groupTxt});
								}
								modData.autoPms.showListTypeId = groupVal;
								break;
						}
					}else{
						modData.productInfo={
							titleInfo:{name:$pbox.find('[name="recTitle"]').val().trim()},
							proInfo:[]
						};
						$('#proRecResTbd'+meid+' tr').each(function(){
							modData.productInfo.proInfo.push($(this).data());
						});
					}
					if(!isAutoRec && modData.productInfo.proInfo.length<1){
						toastr.warning('请至少推荐1个商品！');
						return false;
					}

					// 是否有标题
					if(modData.hasTitle && !isAutoRec && modData.productInfo.titleInfo.name==''){
						toastr.warning('请填写模块标题！');
						return false;
					}
					break;
				case 'm1005': //文本
					modData = {
						text:$('#textModContent'+meid).val().trim(),
						// hasMargin:$pbox.find('.text-margin').prop('checked')
					}
					if(modData.text==''){
						toastr.warning('文本不能为空！');
						return false;
					}
					break;
				case 'm1006': //活动导航
					modData = {
						hasMiaosha: $pbox.find('[name="hasMiaosha"]').prop('checked'),
						hasHongbao: $pbox.find('[name="hasHongbao"]').prop('checked'),
						hasNewhot: $pbox.find('[name="hasNewhot"]').prop('checked'),
						appointment: $pbox.find('[name="appointment"]').prop('checked'),
						hasCoupon: $pbox.find('[name="hasCoupon"]').prop('checked'),
						hasClass: $pbox.find('[name="hasClass"]').prop('checked'),
						hasSign: $pbox.find('[name="hasSign"]').prop('checked'),
						hasExchange: $pbox.find('[name="hasExchange"]').prop('checked')
					}
					if(!(modData.hasCoupon || modData.hasCoupon || modData.hasMiaosha||modData.hasHongbao||modData.hasNewhot||modData.hasQiandao||modData.hasClass||modData.hasSign||modData.hasExchange)){
						toastr.warning('请至少选择一个导航！');
						return false;
					}
					break;
				case 'm1007': //品牌导航
					var $bItems = $('#brandListTbd'+meid+' tr'), brands=[];
					var brandLinkSrc = 'getStockListForCustomer.htm?orderName=market_price&orderType=asc&index=0&length=20&brandId=',
						$this, $sltedBrand;
					if($bItems.length){
						$bItems.each(function(){
							$this = $(this);
							$sltedBrand = $this.find('.brand_select');
							brands.push({
								orderNum: $this.find('[name="orderNum"]').val(),
								brandImgUrl: $this.find('.brand_td_img').attr('src'),
								brandLink: brandLinkSrc+$sltedBrand.find(':selected').val(),
								brandName: $sltedBrand.find(':selected').text(),
								brandId: $sltedBrand.find(':selected').val()
							});
						});
					}else{
						toastr.warning('请至少添加一个品牌！');
						return false;
					}
					modData = {
						brands:brands,
						title:$.trim($pbox.find('[name="modTitle"]').val())
					}
					break;
				case 'm1008': //自定义
					modData={
						htmlStr:cusEditor.html()
					}
					if(cusEditor.isEmpty()){
						toastr.warning('自定义内容不能为空！');
						return false;
					}
					break;
				case 'm1009': //类目导航
					var $cItems = $('#categoryListTbl'+meid+' tr'), categorys=[];
					var $this, $slt;
					if($cItems.length){
						$cItems.each(function(){
							$this = $(this);
							$slt = $this.find('.category_select').eq(1);
							categorys.push({
								orderNum: $this.find('[name="orderNum"]').val(),
								title: $this.find('[name="categoryThemeName"]').val().trim() || '',
								imgUrl: $this.find('.brand_td_img').attr('src'),
								id: $slt.val() && $slt.val().join('_') || []
							});
						});
					}else{
						toastr.warning('请至少添加一个类目！');
						return false;
					}

					for(var i=0; i<categorys.length; i++){
						if(categorys[i].id.length===0)
							return toastr.warning('类目选择不能为空！');
						if(categorys[i].title==='')
							return toastr.warning('主题名称不能为空！');
						if(categorys[i].title.length>6)
							return toastr.warning('主题名称不能多于6个字符！');
					}

					modData = {
						categorys:categorys,
						title:$.trim($pbox.find('[name="modTitle"]').val())
					}
					break;
				case 'm1010': //自定义分类导航
					var $cItems = $('#groupListTbl'+meid+' tr'), groups=[];
					var $this, $slt;
					if($cItems.length){
						$cItems.each(function(){
							$this = $(this);
							resSlt = $this.find('.group_select').eq(0).select2('data');
							groups.push({
								orderNum: $this.find('[name="orderNum"]').val(),
								title: $this.find('[name="groupThemeName"]').val().trim() || '',
								imgUrl: $this.find('.brand_td_img').attr('src'),
								id: resSlt.id,
							});
						});
					}else{
						toastr.warning('请至少添加一个分类！');
						return false;
					}

					for(var i=0; i<groups.length; i++){
						if(groups[i].id.length===0)
							return toastr.warning('分类选择不能为空！');
						if(groups[i].title==='')
							return toastr.warning('显示名称不能为空！');
						if(Utils.getStrLen(groups[i].title)>6)
							return toastr.warning('显示名称不能多于6个字符！');
					}

					modData = {
						groups:groups,
						title:$.trim($pbox.find('[name="modTitle"]').val())
					}
					break;
			}

			modData.mid = mid;
			modData.meid = meid;
			RES_CONF[mid] = modData;

			DEBUG && console.info('更新预览：', modData);

			// 1. 更新到预览 3. 隐藏界面 4. 提示保存
			self.refreshOrderNum4Mod();
			self.refreshDataToPhone(mid);
			$pbox.removeClass('active');
			$('#editWrap').fadeOut();
			m_phoneBox.hideMask(meid);

			$('#shopview .sortable-item').length>0 &&　$('#wx_mod_replace').hide();
			// toastr.warning('店铺装修已更改，请注意保存装修！！！');
		})
	},
	getLinkInfoByLinkType:function(linkType, $linkBox){
		var linkInfo={}, lId = 0;
		if(linkType==='0' || linkType==='10' || linkType==='13' || linkType==='17' || linkType==='18'){
			if(linkType==='0'){
				linkInfo={
					url: $linkBox.find('[name="customerLinkUrl"]').val().trim()
				}
			}else if(linkType==='10'){
				lId = $linkBox.find('[name="specialPromotionLink"]').val();
				linkInfo={
					url:'getSpecialPromotion.htm?suid='+suid+'&id='+lId,
					id:lId
				}
				if(lId == '-1') linkInfo.url="javascript:;";
			}else if(linkType==='13'){
				lId = $linkBox.find('[name="discountPromotionLink"]').val();
				linkInfo={
					url:'discountPromotionDetail.htm?id='+lId+'&storeId=0',
					id:lId
				}
				if(lId == '-1') linkInfo.url="javascript:;";
			}else if(linkType==='17'){
				lId = $linkBox.find('[name="scratchPromotionLink"]').val();
				linkInfo={
					url:'customerLotteryScratch.htm?luckyDrawId='+lId+'&supplierId='+suid,
					id:lId
				}
				if(lId == '-1') linkInfo.url="javascript:;";
			}else{
				lId = $linkBox.find('[name="wheelPromotionLink"]').val();
				linkInfo={
					url:'customerLotteryWheel.htm?luckyDrawId='+lId+'&supplierId='+suid,
					id:lId
				}
				if(lId == '-1') linkInfo.url="javascript:;";
			}
		}else{
			linkInfo={
				url:LINK_DIC[linkType]
			}
		}
		return linkInfo;
	},
	cancelEv:function(){ /*取消*/
		$('#editWrap').on('click','.ui_dialog_close', function(){
			$(".ui-tooltip").css("display","none");
			var $pbox = $(this).closest('.ui_dialog_wrapper');
			var meid = $pbox.attr('id');
			var mid = 'm'+meid.substring(2);

			// 判断是否保存过，如果没有则移除，如果有，则隐藏
			if( typeof RES_CONF[mid] == 'undefined' ){
				$('#'+meid).remove();
				$('#'+mid).remove();
			}

			m_phoneBox.hideMask(meid);
			$pbox.removeClass('active');
			$('#editWrap').fadeOut();
		})
	},
	refreshDataToPhone:function(mid){ /*更新数据到预览*/
		// 获取配置初始化手机预览界面
		var modId = mid.split('-')[0];
		var data = RES_CONF[mid];
		var $box = $('#'+mid);

		$box.replaceWith(template(MODULES[modId].modTplId, data));

		// 商品
		if(modId == 'm1004'){
			page.creatProList(data);
		}

		// 轮播
		if(modId == 'm1001'){
			setTimeout(function(){
				if($('#'+mid).find('.swiper-wrapper a').length>1){
					new Swiper($box.find('.swiper-container')[0], {
				       pagination: $box.find('.swiper-pagination'),
				       autoplayDisableOnInteraction:false,
				       paginationClickable: true,
				       autoplay: 3000
				    });
				}
			}, 500);
		}
	},
	refreshOrderNum4Mod:function(){ //刷新模块的排序ID
		$('#shopview .sortable-item').each(function(i, v){
			RES_CONF[v.id] && (RES_CONF[v.id]['orderNum']=i);
		});
	}
}
	
	// 手机预览
m_phoneBox = {
	init:function(){
		this.foldEv();
		this.editEv();
		this.trushEv();
	},
	foldEv:function(){ /*折叠*/
		$('#shopview').on('click', '.btn_fold', function(){
			var $this = $(this), $parent = $this.closest('.wx_mod');
			if(!$parent.find('.title').is(':visible')){
				$this.addClass('down');
				$parent.find('.title').show();
				$parent.find('.bd').hide();
			}else{
				$this.removeClass('down');
				$parent.find('.title').hide();
				$parent.find('.bd').show();
			}
			// $( "#shopview" ).sortable( 'refreshPositions' );
		});
	},
	editEv:function(){ /*编辑*/
		// 获取该模块ID
		$('#shopview').on('click', '.btn_edit', function(){
			var $parent = $(this).closest('.wx_mod');
			var mid = $parent.attr('id');
			var data = RES_CONF[mid];
			var modId = mid.split('-')[0];

			data.meid = 'me'+mid.substring(1);
			data.editTplId = MODULES[modId].editTplId;

			m_editeBox.show(data);
			m_phoneBox.showMask(mid);
		});
	},
	trushEv:function(){ /*删除*/
		// 获取该模块ID
		$('#shopview').on('click', '.btn_trash', function(){
			var $parent = $(this).closest('.wx_mod');
			var mid = $parent.attr('id');
			var meid = 'me'+mid.substring(1);

			// 删除数据，删除DOM 获取data
			var data = MODULES[mid.split('-')[0]];
			var editTplId =  MODULES[mid.split('-')[0]].editTplId;

			delete RES_CONF[mid];

			$parent.remove();
			if($('#'+meid).hasClass('active')){
				m_editeBox.hide(data);
				m_phoneBox.hideMask(mid);
			}
			$('#shopview .sortable-item').length == 0 && $('#wx_mod_replace').show();

			toastr.warning('店铺装修已更改，请注意保存装修！！！');
		});
	},
	showMask:function(mid){
		// 隐藏模块遮罩 显示整体遮罩 当前模块隐藏 收起和编辑
		$('#shopview').find('.ui_mask_wrapper').hide();
		$('.ui_overlay').css('height', $('#phoneContainer')[0].scrollHeight+'px').show();
		$('#'+mid).addClass('current').find('.ui_mask_wrapper').show();
		// .find('.btn_trash').show();
		// $('#previewBtn').hide();
	},
	hideMask:function(meid){
		// 隐藏整体遮罩 显示模块遮罩 当前模块显示 收起和编辑
		var mid = 'm'+meid.substring(2);
		$('.ui_overlay').hide();
		$('#shopview').find('.ui_mask_wrapper').show();
		$('#'+mid).removeClass('current').find('.btn_trash').show();
		$('#previewBtn').show();
	}
};
	
	(function(){ /*初始化拖动和排序*/
		$( "#moduleList .ui-draggable" ).draggable({
			containment:'#dragWrap',
			connectToSortable: "#shopview",
			helper: "clone",
			revert: "invalid",
			start:function(){ isDragToReplace = true; },
			stop:function(){ isDragToReplace = false; }
		});

		$( "#shopview" ).sortable({
			items: ".sortable-item,#wx_mod_replace",
			cancel: ".ui-state-disabled",
			placeholder: "ui-state-highlight",
			revert: false,
			axis: "y",
			stop:function(e, ui){
//				m_editeBox.refreshOrderNum4Mod();
				if(!isDragToReplace){
					toastr.warning('模块位置发生了变化，请注意保存装修！');
					return;
				}

				// 拿到模块原始ID
			  	var mid = ui.item.context.getAttribute('moduleid');
			  	var $newMod = $('#shopview').find('.mod_item');

			  	var emptyStr='';
			  	switch(mid){
					case 'm1007':
						emptyStr = PAGE_CONF.brandData.length==0 ? '品牌':'';
						break;
					case 'm1009':
						emptyStr = PAGE_CONF.categorysData.length==0 ? '分类':'';
						break;
					case 'm1010':
						emptyStr = PAGE_CONF.groupData.length==0 ? '分类':'';
						break;
				}
				if(emptyStr){
					toastr.warning('暂无 '+emptyStr+' 数据！');
					return;
				}
			  	// 生成新的模块ID
			  	var newId = (new Date()).getTime().toString(16).substring(7);
			  	var data = MODULES['m'+mid];
				  	data.mid ='m'+mid+'-'+newId;
				  	data.meid ='me'+mid+'-'+newId;

			  	// 创建模块到预览
		  		$newMod.replaceWith(template(data.modTplId, data));
		  		m_phoneBox.showMask(data.mid);

		  		if(mid === '1004'){
		  			data.brandData = DEF_CONF['m1004'].brandData;
		  			data.categorysData = DEF_CONF['m1004'].autoPms.showListTypeInfo;
		  		}

	  			// 显示编辑界面
			  	m_editeBox.show(data);
			}
		});

		$("#shopview").disableSelection();
	})()
	
	m_editeBox.init();
	m_phoneBox.init();
	page.init();
	
	
})
