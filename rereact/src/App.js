const names=[{id:"1",name:"胖胖"},{id:2,name:"牛奶"}]
const text=false
const type=()=>{return "hi"}
const fat=false
function hi(){
  console.log("有")
  return "嗨"
}


function App() {
  return (
    <div className="App">
     {names.map((name)=><span key={name.id}>{name.name}</span>)}
     {text  ? <div>胖胖</div>:null }
     {text &&   <div>胖胖牛</div> }
     {true && <span>下一個</span>}
    {type(1)}
    {hi()}
    {fat ? <div>胖胖</div>:<div>瘦弱的胖</div>}

    </div>

  );
}
//  陣列.map((每一個組件)＝>要幹嘛)
export default App;
