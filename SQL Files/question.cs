using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Online_exam_
{
    #region Question
    public class Question
    {
        #region Member Variables
        protected string _Question;
        protected int _QNo;
        protected string _Option;
        protected string _Option;
        protected string _Option;
        protected string _Option;
        protected string _CorrectAnswer;
        protected string _PaperCode;
        #endregion
        #region Constructors
        public Question() { }
        public Question(string Question, int QNo, string Option, string Option, string Option, string Option, string CorrectAnswer, string PaperCode)
        {
            this._Question=Question;
            this._QNo=QNo;
            this._Option=Option;
            this._Option=Option;
            this._Option=Option;
            this._Option=Option;
            this._CorrectAnswer=CorrectAnswer;
            this._PaperCode=PaperCode;
        }
        #endregion
        #region Public Properties
        public virtual string Question
        {
            get {return _Question;}
            set {_Question=value;}
        }
        public virtual int QNo
        {
            get {return _QNo;}
            set {_QNo=value;}
        }
        public virtual string Option
        {
            get {return _Option;}
            set {_Option=value;}
        }
        public virtual string Option
        {
            get {return _Option;}
            set {_Option=value;}
        }
        public virtual string Option
        {
            get {return _Option;}
            set {_Option=value;}
        }
        public virtual string Option
        {
            get {return _Option;}
            set {_Option=value;}
        }
        public virtual string CorrectAnswer
        {
            get {return _CorrectAnswer;}
            set {_CorrectAnswer=value;}
        }
        public virtual string PaperCode
        {
            get {return _PaperCode;}
            set {_PaperCode=value;}
        }
        #endregion
    }
    #endregion
}