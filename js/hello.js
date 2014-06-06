var person =
{
  'firstName' : 'Sarah',
  'lastName' : 'Riviere',
  'printName' : function()
  {
    alert(this.firstName + ' ' + this.lastName);
  }
};
person.printName();

