public class AnagrafeCoppia {
	AnagrafeCani cane;
	AnagrafePadroni padrone;

	public AnagrafeCoppia(
		AnagrafeCani c,
		AnagrafePadroni p
		){
		this.cane = c;
		this.padrone = p;
	}

	public AnagrafeCani getDog(){
    	return cane;
    }

    public void setDog(String name) {
        this.name = name;
    }

    public String getPadroni(){
    	return padrone;
    }

    public void setPadroni(String name) {
        this.name = name;
    }
}