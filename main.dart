import 'package:flutter/material.dart';
import 'package:flutter/animation.dart';



void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  // This widget is the root of your application.
  @override
  build(context) {
    return MaterialApp(
      home: new LoginPage(),
      theme: new ThemeData(primarySwatch: Colors.blueGrey),
    );
  }
}

class LoginPage extends StatefulWidget {
  State createState() => new LoginPageState();
}

class LoginPageState extends State<LoginPage>
    with SingleTickerProviderStateMixin {

  final formKey = new GlobalKey<FormState>();

  String _email;
  String _password;

  AnimationController _iconAnimationController;
  Animation<double> _iconAnimation;


  void validateAndSave(){
    final form = formKey.currentState;
    if (form.validate()){
      form.save();
      print('Form is valid. Email: $_email, Password: $_password');
      } else {
      print('Form is invalid');
    }
  }

  @override
  void initState() {
    super.initState();
    _iconAnimationController = new AnimationController(
        vsync: this, duration: new Duration(milliseconds: 500));
    _iconAnimation = new CurvedAnimation(
        parent: _iconAnimationController, curve: Curves.bounceOut);

    _iconAnimation.addListener(() => this.setState(() {}));
    _iconAnimationController.forward();
  }

  @override
  Widget build(BuildContext context) {
    return new Scaffold(
      backgroundColor: Colors.greenAccent,
      body: new Stack(
        fit: StackFit.expand,
        children: <Widget>[
          new Image(
            image: new AssetImage('assets/gsu.png'),
            fit: BoxFit.cover,
            color: Colors.black87,
            colorBlendMode: BlendMode.darken,
          ),
          new Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: <Widget>[
              new FlutterLogo(
                size: _iconAnimation.value * 100,
              ),
              /*   new Image(
                image: AssetImage("assets/ncricon.png"),
                    width: _iconAnimation.value * 100,
                    height: _iconAnimation.value * 100,
              ),*/
              new Form(
                child: new Theme(
                  data: new ThemeData(
                      brightness: Brightness.dark,
                      primarySwatch: Colors.teal,
                      inputDecorationTheme: new InputDecorationTheme(
                        labelStyle:
                        new TextStyle(
                            color: Colors.teal,
                            fontSize: 20.0),
                      )
                  ),
                  child: new Container(
                    padding: const EdgeInsets.all(40.0),
                    child: new Column(
                      crossAxisAlignment: CrossAxisAlignment.center,
                      children: <Widget>[
                        new TextFormField(
                          decoration: new InputDecoration(
                            labelText: "Enter Email",
                          ),
                          keyboardType: TextInputType.text,
                          validator: (value) => value.isEmpty ? 'Email cannot be empty': null,
                          onSaved: (value) => _email = value,
                        ),
                        new TextFormField(
                          decoration: new InputDecoration(
                            labelText: "Enter Password",
                          ),
                          keyboardType: TextInputType.text,
                          obscureText: true,
                          validator: (value) => value.isEmpty ? 'Password cannot be empty': null,
                          onSaved: (value) => _password = value,
                        ),
                        new Padding(padding: const EdgeInsets.only(top: 20.0)
                        ),
                        new MaterialButton(
                          color: Colors.tealAccent,
                          child: new Text("Login", style: new TextStyle(fontSize:20.0 )),
                          onPressed: validateAndSave,
                        ),
                        new MaterialButton(
                          color: Colors.tealAccent,
                          child: new Text("Login", style: new TextStyle(fontSize:20.0 )),
                          onPressed: validateAndSave,
                        ),
                      ],
                    ),
                  ),
                ),
              ),
            ],
          ),
        ],
      ),
    );
  }
}


