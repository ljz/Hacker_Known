<script language="javascript">
var ddlYear = null;
var ddlMonth = null;
var ddlDay = null;
var AOBJ_CurrentDate = null;
function Window_Load(){ 
	ddlYear = document.getElementById("ddlYear");
	ddlMonth = document.getElementById("ddlMonth");
	ddlDay = document.getElementById("ddlDay");   
	AOBJ_CurrentDate = new Date();
	//绑定数据
	Year_Bind();//option
	ddlYear.value = AOBJ_CurrentDate.getFullYear();
	Month_Bind();
	ddlMonth.value = AOBJ_CurrentDate.getMonth() + 1;
	Day_Bind();  
//设置Change事件,就是在选年月日之后，后面的day变为1
	ddlYear.onchange=Day_Bind;
	ddlMonth.onchange=Day_Bind; 
	//设置默认值(当前日期的年、月、日作为下拉的默认值)
//	ddlYear.value = AOBJ_CurrentDate.getFullYear();
//	ddlMonth.value = AOBJ_CurrentDate.getMonth() + 1;
	ddlDay.value  =  AOBJ_CurrentDate.getDate();//没有值
		}

function Year_Bind(){
	var intCurrentYear = AOBJ_CurrentDate.getFullYear();
	for(i = intCurrentYear + 30; i >= intCurrentYear - 30; i -- ){
		ddlYear.options.add(new Option(i + " 年",i));
	}
}

function Month_Bind(){
	for(i = 1; i <= 12; i++ ){
		ddlMonth.options.add(new Option(i + " 月",i));
	}
}

function Day_Bind(){ 
	//取得当前月的总天数
	var objDate = new Date(ddlYear.value,ddlMonth.value ,"0");
	var totalDaysInMonth = objDate.getDate();
	//绑定下拉
	ddlDay.options.length=0;
	for(i = 1; i <= totalDaysInMonth; i++){
		ddlDay.options.add(new Option(i + " 日",i));
	} 
} 
</script>
