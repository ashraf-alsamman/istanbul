import React, { Component }  from 'react';
import ReactDOM from 'react-dom';
 
 
        
import SelectPicker from "react-select-picker";
 


export default class Example extends Component {
  
constructor()
{
    super();
  this.state  = { nameV: false ,emailV: false ,phoneV: false ,categoryV: false ,tagV: true ,imagesFromUsers: []
    ,nameData: null ,emailData: null ,phoneData: null ,categoryData: null ,
    tagData:[],getCategories: [] ,getTags: []
} ; // 

}
 
handleImageChange(e) {
    e.preventDefault();
    var imagesFromUsers = [ ]
    var ins = document.getElementById('image').files.length;
    for (var x = 0; x < ins; x++) {
        let reader = new FileReader();
        let file = e.target.files[x];
        reader.onloadend = () => {
        var joined = this.state.imagesFromUsers.concat(reader.result);
        this.setState({ imagesFromUsers: joined })
        }
        reader.readAsDataURL(file)
    }
        

    
    this.setState({ imagesFromUsers: imagesFromUsers,});
 
         let fgff=  imagesFromUsers.map((item,i) =>( 
            <div className="card-body"> {item.i.imagePreviewUrl}</div>
               
            
    ))  
  }


 
    uploadHandler  (event)  {
    event.preventDefault()
    
    if (this.state.imagesFromUsers.length<1)
    {
      
        
        alert('upload at least on photo');return false;
    }

    const formData = new FormData()
    var ins = document.getElementById('image').files.length;
for (var x = 0; x < ins; x++) {
    formData.append("image[]", document.getElementById('image').files[x]);
   
}

 
formData.append("name", this.state.nameData);
formData.append("email", this.state.emailData);
formData.append("phone", this.state.phoneData);
formData.append("category", this.state.categoryData);
formData.append("tag[]", this.state.tagData);
 
 
    axios.post('/uploadPhoto', formData)  .then(function (response) {
        console.log(response);
      })
      .catch(function (error) {
         console.log(error);
      });
  }
 
componentWillMount  () {
    $(".selectpicker").selectpicker('refresh');

    let $this = this;
    
  axios.get('/getCategories').then(responce=>{
 console.log(responce);
      $this.setState({
        getCategories:responce.data
      })
  }).catch(error=>{
      consol.log(error) 
  })
 
  axios.get('https://jsonplaceholder.typicode.com/posts').then(responce=>{
 console.log(responce);
      $this.setState({
        getTags:responce.data
      })
  }).catch(error=>{
      consol.log(error) 
  })








}

handleNameChange  (e) 
{  
    if (e.target.value.length<4 )
    {
        $("#name").addClass( "nvla" );
        this.setState({nameV: false }, () => console.log(this.state)) //
    }

    else
    {
        this.setState({nameV: true }, () => console.log(this.state)) //
        $( "#name").removeClass( "nvla" ).addClass( "yourClass" );
        this.setState({nameData: e.target.value }, () => console.log(this.state)) //

    }   
}

handleEmailChange  (e) 
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(e.target.value))
    {
        $( "#email").removeClass( "nvla" ).addClass( "yourClass" );
        this.setState({emailV: true }, () => console.log(this.state)) //
        this.setState({emailData: e.target.value }, () => console.log(this.state)) //


    }
    else
    {
        $("#email").addClass( "nvla" );
        this.setState({emailV: false }, () => console.log(this.state)) //
    }
}

handlePhoneChange  (e) 
{
    if (e.target.value.length<6 )
    {
        $("#phone").addClass( "nvla" );
        this.setState({phoneV: false }, () => console.log(this.state)) //
    }

    else
    {
        $( "#phone").removeClass( "nvla" ).addClass( "yourClass" );
        this.setState({phoneV: true }, () => console.log(this.state)) //
        this.setState({phoneData: e.target.value }, () => console.log(this.state)) //

    } 
}
handleCategoryChange  (e) 
{
    if (e.target.value=="no" )
    {
        $('[data-id=category]').addClass( "nvla" ); 
        this.setState({categoryV: false }, () => console.log(this.state)) //
    }

    else
    {
        $('[data-id=category]').removeClass( "nvla" ).addClass( "yourClass" );
        this.setState({categoryV: true }, () => console.log(this.state)) //
        this.setState({categoryData: e.target.value }, () => console.log(this.state)) //

    }    
} 

handletestChange(e){
    this.setState({tagData: e.target.value }, () => console.log(this.state)) //
}
handleTagChange  (e) 
{
    if (e.target.value.length<1 )
    {
        $('[data-id=tag]').addClass( "nvla" ); 
        this.setState({tagV: false }, () => console.log(this.state)) //
    }

    else
    {
        $( "#tag").removeClass( "nvla" ).addClass( "yourClass" );
        this.setState({tagV: true }, () => console.log(this.state))  
        this.setState({tagData: $("#tag").val() }, () => console.log(this.state)) //
        $('[data-id=tag]').removeClass( "nvla" ).addClass( "yourClass" );
        console.log($("#tag").val());
    }
} 
    stepOne  (event) {
    event.preventDefault();
    
    if (this.state.nameV && this.state.emailV && this.state.phoneV)
    {
        
 // Material Select Initialization

        $('.bs-deselect-all').trigger('click');
        $('[data-id=tag]').removeClass( "nvla" );
        // go to step 2
        $("#step1").addClass( "d-none" );
        $("#step2").removeClass( "d-none" ).addClass( "yourClass" );
        $("#step3").addClass( "d-none" );
        
    }
    if (!this.state.nameV){$("#name").addClass( "nvla" );}
    if (!this.state.emailV){$("#email").addClass( "nvla" );}
    if (!this.state.phoneV){$("#phone").addClass( "nvla" );}
}

stepTwo  (event) {
    event.preventDefault();
 
    
    if (this.state.categoryV && this.state.tagV)
    {
        // go to step 3
        $("#step1").addClass( "d-none" );
        $("#step2").addClass( "d-none" );
        $("#step3").removeClass( "d-none" ).addClass( "yourClass" );
    }
 
if (!this.state.categoryV) {$('[data-id=category]').addClass( "nvla" ); }
if (!this.state.tagV){$('[data-id=tag]').addClass( "nvla" );}
 
}

 
    render() {
        
        let testyanas=null;
  
        testyanas=( <select   multiple  className="selectpicker">
        <option  >dddddd</option>
        {this.state.getCategories.map((e, key) => {
              <option key={key} value={e.id}>{e.id}</option> 
        })}
      </select>)




        const imageStyle = {
            width: '100px',
            marginRight: '20px',
          };
   // console.log(this.state.imagesFromUsers);
        let {imagePreviewUrl} = this.state.imagesFromUsers;
        let $imagePreview = null;
        let $hhhhhhhhhhh = null;
        if (this.state.imagesFromUsers) {
 
        } else {
          $imagePreview = (<div className="previewText">Please select an Image for Preview</div>);
        }











        return (
           


            <div className=" ">


     

     
 
    


 <div className="row">
            <div className="f1-step  col">
                <div className="f1-step-icon step-active">1<i className="fa fa-user"></i></div>
            </div>
            <div className="f1-step col">
                <div className="f1-step-icon">2<i className="fa fa-key"></i></div>
            </div>
            <div className="f1-step col">
                <div className="f1-step-icon">3<i className="fa fa-twitter"></i></div>
            </div>
 </div>
<br />
            <div id="step1">
            <form action="" method="post">



          
<div className="form-group"><label className="sr-only" htmlFor="name">Name</label>
 <input type="text" name="name" placeholder="First name..." className="f1-first-name form-control"  onChange={this.handleNameChange.bind(this)} id="name"  />
</div>    

<div className="form-group"><label className="sr-only" htmlFor="email">Email</label>
 <input type="text" name="email" placeholder="Email..." className="f1-first-name form-control"  onChange={this.handleEmailChange.bind(this)} id="email"  />
</div> 

<div className="form-group"><label className="sr-only" htmlFor="phone">Phone</label>
 <input type="number" name="phone" placeholder="Phone..." className="f1-first-name form-control"  onChange={this.handlePhoneChange.bind(this)} id="phone"  />
</div> 
<button  className="btn btn-primary" onClick={this.stepOne.bind(this)}>Next</button>
                </form> 
            </div>

{$hhhhhhhhhhh}
 <div id="step2"  className="d-none">
  <form action="" method="post">
    <div className="form-group row"><label className="sr-only" htmlFor="category">Category</label>
        <select className="selectpicker" data-live-search="true" name="category"   onChange={this.handleCategoryChange.bind(this)} id="category" >
        <option value="no">Choose</option>

        


        <option data-tokens="ketchup mustard" value="1">Hot Dog, Fries and a Soda</option>
        </select>

    </div>    
 
    <div className="form-group row"><label className="sr-only" htmlFor="tag">Tags</label>
    <select className="selectpicker" multiple data-actions-box="true"  name="tag"   onChange={this.handleTagChange.bind(this)} id="tag">
    {this.state.getCategories.map((e, key) => {
        return <option key={key} value={e.id}>{e.id}</option>;
    })}

  
  </select>
 <select   multiple  className="selectpicker">
  {this.state.getCategories.map((e, key) => {
      return <option key={key} value={e.id}>{e.id}</option>;
  })}
</select>
    </div> 
    
<div className="form-group row">
  <button  className="btn btn-primary" onClick={this.stepTwo.bind(this)}>Next</button>
</div>
            </form> 
 </div> //  --step2-- 

            <div id="step3" className="d-none">
            <form action="" method="post" encType="multipart/form-data">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <input type="file" onChange={this.handleImageChange.bind(this)} id="image" name="image[]" multiple/>
                <button onClick={this.uploadHandler.bind(this)}>Upload!</button>
            </form> 
                    {this.state.imagesFromUsers.map((item,i) =>( 
          
             <img style={imageStyle}  src ={ item }  />
    )) }
            </div>





                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">




<div id="preview"></div>
<div className="imgPreview">
{$imagePreview}

</div>


                            </div>

                        </div>
                    </div>
                </div>
                
        );
    }
}


if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
