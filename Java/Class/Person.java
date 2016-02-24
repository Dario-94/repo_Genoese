public class Person{
    String nome;
    String cognome;
    int età;
    
    public Person(
	String firstName, 
	String lastName,
	int age){
            this.nome = firstName;
            this.cognome = lastName;
            this.età = age;
    }
    
    public String getName(){
	return nome;
    }
    
    public String getlastName(){
	return cognome;
    }
       
    public int getAge(){
	return età;
    }
}