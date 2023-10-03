using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Project
{
    #region Test
    public class Test
    {
        #region Member Variables
        protected unknown _date;
        #endregion
        #region Constructors
        public Test() { }
        public Test(unknown date)
        {
            this._date=date;
        }
        #endregion
        #region Public Properties
        public virtual unknown Date
        {
            get {return _date;}
            set {_date=value;}
        }
        #endregion
    }
    #endregion
}